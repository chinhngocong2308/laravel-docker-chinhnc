@extends('layouts.company.company-job')
@section('title', 'CClassContact')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush
@section('main')

    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit C-Class</h1>
            </div>

            <div class="section-body">
                <h2><a href="javascript:void(0)" onclick="history.back()" class="btn btn-icon icon-left btn-primary"><i
                            class="fas fa-chevron-left"></i> Back</a></h2>

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>C-Class Information</h4>
                            </div>
                            <form action="{{ route('cclasscontact.update', $contact->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="fullname">Full Name</label>
                                        <input type="text" name="fullname" id="fullname" class="form-control"
                                            value="{{ $contact->fullname }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="position">Position</label>
                                        <select class="form-control selectric" name="position" id="position">
                                            <option value="CEO" {{ $contact->position == 'CEO' ? 'selected' : '' }}>CEO
                                            </option>
                                            <option value="CTO" {{ $contact->position == 'CTO' ? 'selected' : '' }}>CTO
                                            </option>
                                            <option value="CFO" {{ $contact->position == 'CFO' ? 'selected' : '' }}>CFO
                                            </option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="company_id">Company</label>
                                        <select class="form-control selectric" name="company_id" id="company_id">
                                            @foreach ($companies as $company)
                                                <option value="{{ $company->id }}"
                                                    {{ $company->id == $contact->company_id ? 'selected' : '' }}>
                                                    {{ $company->company_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group mb-0">
                                        <label for="contact_information">Contact Information</label>
                                        <textarea name="contact_information" id="contact_information" class="summernote">{{ $contact->contact_information }}</textarea>
                                    </div>
                                </div>
                                <div class="card-footer text-right">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
    </div>

@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/summernote/dist/summernote-bs4.js') }}"></script>
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>
    <script src="{{ asset('library/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

    <!-- Page Specific JS File -->
@endpush
