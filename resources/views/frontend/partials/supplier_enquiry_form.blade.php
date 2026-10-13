@php
    $buyerTypeOptions = $buyerTypeOptions ?? [
        'School',
        'TVET Institute',
        'University / College',
        'Ministry / Tender',
        'Distributor / Bidder',
        'Other',
    ];
    $buyerTypeLabel = $buyerTypeLabel ?? 'Buyer type';
    $phonePlaceholder = $phonePlaceholder ?? '+…';
    $requirementPlaceholder = $requirementPlaceholder ?? 'Describe your lab equipment requirement or paste your BOQ…';
@endphp

@if ($errors->any())
    <div class="supplier-form-alert is-error" role="alert">
        <strong>Please fix the following:</strong>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('success'))
    <div class="supplier-form-alert is-success" role="status">{{ session('success') }}</div>
@endif

@if (session('error'))
    <div class="supplier-form-alert is-error" role="alert">{{ session('error') }}</div>
@endif

<div class="form-wrap">
    <form method="post" action="{{ route('enquiry.store') }}" enctype="multipart/form-data" class="supplier-enquiry-form">
        @csrf
        <input type="hidden" name="country" value="{{ $countryName }}">
        <input type="hidden" name="source_page" value="{{ $sourcePageRoute }}">

        <div class="form-grid">
            <div class="field">
                <label for="supplier_name">Name</label>
                <input id="supplier_name" type="text" name="name" value="{{ old('name') }}" required maxlength="120" placeholder="Your name" autocomplete="name">
            </div>
            <div class="field">
                <label for="supplier_email">Email</label>
                <input id="supplier_email" type="email" name="email" value="{{ old('email') }}" required maxlength="150" placeholder="you@email.com" autocomplete="email">
            </div>
            <div class="field">
                <label for="supplier_phone">Phone / WhatsApp</label>
                <input id="supplier_phone" type="tel" name="mobile_no" value="{{ old('mobile_no') }}" required maxlength="40" placeholder="{{ $phonePlaceholder }}" autocomplete="tel">
            </div>
            <div class="field">
                <label for="supplier_buyer_type">{{ $buyerTypeLabel }}</label>
                <select id="supplier_buyer_type" name="buyer_type" required>
                    @foreach($buyerTypeOptions as $option)
                        <option value="{{ $option }}" @selected(old('buyer_type') === $option)>{{ $option }}</option>
                    @endforeach
                </select>
            </div>
            <div class="field full">
                <label for="supplier_message">Your requirement / BOQ</label>
                <textarea id="supplier_message" name="message" rows="4" required maxlength="5000" placeholder="{{ $requirementPlaceholder }}">{{ old('message') }}</textarea>
            </div>
            <div class="field full">
                <label for="supplier_file">Attach BOQ / tender file <span style="font-weight:400;color:var(--muted)">(optional, max 5MB)</span></label>
                <input id="supplier_file" type="file" name="file_name" accept=".pdf,.doc,.docx,.xls,.xlsx,.jpg,.jpeg,.png,.webp">
            </div>
            <div class="field full">
                <button type="submit" class="btn btn-primary" style="width:100%;justify-content:center">Request My Free Quote →</button>
            </div>
        </div>
    </form>
</div>

<style>
.supplier-form-alert {
  padding: 12px 14px;
  border-radius: 8px;
  margin-bottom: 16px;
  font-size: 14px;
}
.supplier-form-alert ul {
  margin: 8px 0 0;
  padding-left: 18px;
}
.supplier-form-alert.is-error {
  background: #fef2f2;
  border: 1px solid #fecaca;
  color: #991b1b;
}
.supplier-form-alert.is-success {
  background: #ecfdf5;
  border: 1px solid #a7f3d0;
  color: #065f46;
}
.supplier-enquiry-form .field input[type="file"] {
  width: 100%;
  max-width: 100%;
  padding: 10px 12px;
  background: #fff;
}
.form-sec,
.form-sec .wrap,
.form-sec .split,
.form-sec .grid2,
.form-wrap,
.form-grid,
.field,
.tbl-wrap {
  min-width: 0;
  max-width: 100%;
}
.field input,
.field textarea,
.field select {
  width: 100%;
  max-width: 100%;
  box-sizing: border-box;
}
.qbox p,
.qbox h4 {
  overflow-wrap: anywhere;
}
@media (max-width: 860px) {
  .form-sec .split,
  .form-sec .grid2,
  .form-grid {
    grid-template-columns: 1fr !important;
  }
  .form-wrap {
    padding: 18px 14px;
  }
  .tbl-wrap {
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
  }
  body {
    overflow-x: hidden;
  }
}
</style>
