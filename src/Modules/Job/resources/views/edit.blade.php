@extends('layouts.company.company-job')
@section('title', 'Company Job List')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet"
    href="{{ asset('library/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('library/summernote/dist/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush
@section('main')

    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Edit Job</h1>
            </div>

            <div class="section-body">
                <h2 class="section-title">Edit</h2>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Job Information</h4>
                            </div>
                            <form action="{{ route('job.update', $job->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="job_title">Job Title</label>
                                        <input type="text" name="job_title" id="job_title" class="form-control" value="{{ $job->job_title }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="company_id">Company</label>
                                        <select class="form-control selectric" name="company_id" id="company_id">
                                            @foreach ($companies as $company)
                                                <option value="{{ $company->id }}" {{ $company->id == $job->company_id ? 'selected' : '' }}>{{ $company->company_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="job_location">Job Location</label>
                                        <input type="text" name="job_location" id="job_location" class="form-control" value="{{ $job->job_location }}">
                                    </div>

                                    <div class="form-group">
                                        <label for="job_type">Job Type</label>
                                        <select class="form-control selectric" name="job_type" id="job_type">
                                            <option value="onsite" {{ $job->job_type == 'onsite' ? 'selected' : '' }}>Onsite</option>
                                            <option value="hybrid" {{ $job->job_type == 'hybrid' ? 'selected' : '' }}>Hybrid</option>
                                            <option value="remote" {{ $job->job_type == 'remote' ? 'selected' : '' }}>Remote</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="employment_type">Employment Type</label>
                                        <select class="form-control selectric" name="employment_type" id="employment_type">
                                            <option value="full-time" {{ $job->employment_type == 'full-time' ? 'selected' : '' }}>Full-time</option>
                                            <option value="part-time" {{ $job->employment_type == 'part-time' ? 'selected' : '' }}>Part-time</option>
                                            <option value="temporary" {{ $job->employment_type == 'temporary' ? 'selected' : '' }}>Temporary</option>
                                            <option value="contract" {{ $job->employment_type == 'contract' ? 'selected' : '' }}>Contract</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="open_date">Open Date</label>
                                        <input type="text" name="open_date" id="open_date" class="form-control datetimepicker" value="{{ $job->open_date }}">
                                    </div>
                                    <div class="form-group mb-0">
                                        <label for="description">Description</label>
                                        <textarea name="description" id="description" class="summernote">{{ $job->description }}</textarea>
                                    </div>
                                    <div class="form-group mb-0">
                                        <label for="requirements">Requirements</label>
                                        <textarea name="requirements" id="requirements" class="summernote">{{ $job->requirements }}</textarea>
                                    </div>
                                    <div class="form-group mb-0">
                                        <label for="responsibilities">Responsibilities</label>
                                        <textarea name="responsibilities" id="responsibilities" class="summernote">{{ $job->responsibilities }}</textarea>
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
