<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Enquiry;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class EnquiryController extends Controller
{
    public function store(Request $request)
    {
        try {
            $inputs = $request->only([
                'name',
                'email',
                'country',
                'mobile_no',
                'message',
            ]);

            if ($request->filled('buyer_type')) {
                $inputs['message'] = 'Buyer type: '.$request->input('buyer_type')."\n\n".$inputs['message'];
            }

            $sourcePage = $request->input('source_page');
            $allowedSourcePages = [
                'laboratory-equipment-supplier-in-kenya',
                'laboratory-equipment-supplier-in-uganda',
                'laboratory-equipment-supplier-in-nigeria',
                'laboratory-equipment-supplier-in-tanzania',
                'laboratory-equipment-supplier-in-ghana',
                'laboratory-equipment-supplier-in-zambia',
            ];

            $validator = (new Enquiry)->validate($inputs);
            if ($validator->fails()) {
                if (is_string($sourcePage) && in_array($sourcePage, $allowedSourcePages, true)) {
                    return redirect(route($sourcePage).'#enquiry')->withErrors($validator)->withInput();
                }

                return back()->withErrors($validator)->withInput();
            }

            $fileUrl = '';
            if ($request->hasFile('file_name')) {
                $request->validate([
                    'file_name' => 'file|max:5120|mimes:pdf,doc,docx,xls,xlsx,jpg,jpeg,png,webp',
                ]);

                $file = $request->file('file_name');
                $filename = time() . '_' . preg_replace('/[^A-Za-z0-9_\.-]/', '_', $file->getClientOriginalName());
                $destination = public_path('files');
                if (!is_dir($destination)) {
                    mkdir($destination, 0755, true);
                }
                $file->move($destination, $filename);
                $fileUrl = '/files/' . $filename;
                $inputs['file_name'] = $fileUrl;
            }

            $id = (new Enquiry)->store($inputs);
            $enquiry = Enquiry::find($id);

            if (!$enquiry) {
                return back()->with('error', 'Unable to save your enquiry. Please try again.')->withInput();
            }

            $page = $this->enquiryPage($sourcePage);

            $data = [
                'name' => $enquiry->name,
                'email' => $enquiry->email,
                'country' => $enquiry->country,
                'mobile_no' => $enquiry->mobile_no,
                'massage' => $enquiry->message,
                'file_name' => $fileUrl,
                'page_name' => $page['name'],
                'page_url' => $page['url'],
            ];

            try {
                Mail::send('frontend.emails.contact_us', $data, function ($message) use ($enquiry, $page) {
                    $message->from(config('mail.from.address'), config('mail.from.name'));
                    $message->to('sales@aticoscientific.com', 'Atico Scientific Sales');
                    $message->replyTo($enquiry->email, $enquiry->name);
                    $subject = 'New Website Enquiry — '.$enquiry->name;
                    if ($page['name'] !== '') {
                        $subject .= ' — '.$page['name'];
                    }
                    if (!empty($enquiry->country)) {
                        $subject .= ' ('.$enquiry->country.')';
                    }
                    $message->subject($subject);
                });
            } catch (\Throwable $mailError) {
                Log::error('Enquiry email failed: '.$mailError->getMessage(), [
                    'enquiry_id' => $id,
                ]);
            }

            return redirect()->route('thankyou');
        } catch (\Exception $e) {
            Log::error('Enquiry store failed: '.$e->getMessage());
            return back()->with('error', 'Something went wrong while submitting your enquiry. Please try again.')->withInput();
        }
    }

    /**
     * @return array{name: string, url: string}
     */
    private function enquiryPage($sourcePage): array
    {
        $sourcePage = is_string($sourcePage) ? trim($sourcePage) : '';
        if ($sourcePage === '') {
            return ['name' => '', 'url' => ''];
        }

        if (str_starts_with($sourcePage, 'blog/')) {
            $slug = substr($sourcePage, 5);
            $blog = \App\Models\Blog::query()->where('slug', $slug)->first();
            $name = $blog ? 'Blog: '.trim(strip_tags($blog->name)) : 'Blog';

            return [
                'name' => $name,
                'url' => url('/blog/'.$slug),
            ];
        }

        $routes = [
            'contact-us' => 'contact_us_page',
        ];
        $routeName = $routes[$sourcePage] ?? $sourcePage;
        $url = \Route::has($routeName) ? route($routeName) : '';

        return [
            'name' => ucwords(str_replace('-', ' ', $sourcePage)),
            'url' => $url,
        ];
    }

    public function index()
    {
        return view('admin.enquiry.index');
    }

    public function destroy($id)
    {
        try {
            $enquiry = Enquiry::findOrFail($id);
            $enquiry->delete();

            return redirect()->route('enquiry.index')->with('success', 'Enquiry deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->route('enquiry.index')->with('error', 'Failed to delete enquiry.');
        }
    }

    public function deleteSelected(Request $request)
    {
        try {
            $selectedEnquiries = $request->input('selected_enquiries', []);

            Enquiry::whereIn('id', $selectedEnquiries)->delete();

            return redirect()->route('enquiry.index')->with('success', 'Selected enquiries deleted successfully.');
        } catch (\Exception $e) {
            Log::error('Error deleting selected enquiries: ' . $e->getMessage());

            return redirect()->route('enquiry.index')->with('error', 'Failed to delete selected enquiries.');
        }
    }

    public function enquiryPaginate(Request $request, $pageNumber = null)
    {
        if (!\Request::isMethod('post') && !\Request::ajax()) {
            return lang('messages.server_error');
        }

        $inputs = $request->all();
        $page = 1;
        if (isset($inputs['page']) && (int)$inputs['page'] > 0) {
            $page = $inputs['page'];
        }

        $perPage = 20;
        if (isset($inputs['perpage']) && (int)$inputs['perpage'] > 0) {
            $perPage = $inputs['perpage'];
        }

        $start = ($page - 1) * $perPage;
        if (isset($inputs['form-search']) && $inputs['form-search'] != '') {
            $inputs = array_filter($inputs);
            unset($inputs['_token']);

            $data = (new Enquiry)->getEnquiry($inputs, $start, $perPage);

            $totalnews = (new Enquiry)->totalEnquiry($inputs);
            $total = $totalnews->total;
        } else {
            $data = (new Enquiry)->getEnquiry($inputs, $start, $perPage);
            $totalnews = (new Enquiry)->totalEnquiry($inputs);
            $total = $totalnews->total;
        }
        return view('admin.enquiry.load_data', compact('inputs', 'data', 'total', 'page', 'perPage'));
    }
}
