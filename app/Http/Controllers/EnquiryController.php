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

            $validator = (new Enquiry)->validate($inputs);
            if ($validator->fails()) {
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

            $data = [
                'name' => $enquiry->name,
                'email' => $enquiry->email,
                'country' => $enquiry->country,
                'mobile_no' => $enquiry->mobile_no,
                'massage' => $enquiry->message,
                'file_name' => $fileUrl,
            ];

            try {
                Mail::send('frontend.emails.contact_us', $data, function ($message) use ($enquiry) {
                    $message->from(config('mail.from.address'), config('mail.from.name'));
                    $message->to(config('mail.from.address'), 'Atico Scientific Sales');
                    $message->replyTo($enquiry->email, $enquiry->name);
                    $message->subject('New Website Enquiry — ' . $enquiry->name);
                });
            } catch (\Throwable $mailError) {
                Log::error('Enquiry email failed: '.$mailError->getMessage(), [
                    'enquiry_id' => $id,
                ]);
            }

            return redirect()->route('contact_us_page')->with('success', 'Thank you! We have received your enquiry. Our team will get back to you soon.');
        } catch (\Exception $e) {
            Log::error('Enquiry store failed: '.$e->getMessage());
            return back()->with('error', 'Something went wrong while submitting your enquiry. Please try again.')->withInput();
        }
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
