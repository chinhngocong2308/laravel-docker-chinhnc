@extends('layouts.company.company-job')
@section('title', 'Company Job List')

@push('style')
    <!-- CSS Libraries -->

@endpush

@section('main')

    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>View Company</h1>
            </div>

            <div class="section-body">
                <h2 class="section-title">View</h2>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Company Information</h4>
                            </div>

                            <form action="{{ route('company.update', $company->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="card-body">
                                    <div class="form-group">
                                        <label>Company Name</label>
                                        <input type="text" name="company_name" id="company_name" class="form-control" value="{{ $company->company_name }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Industry</label>
                                        <input type="text" name="industry" id="industry" class="form-control" value="{{ $company->industry }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Number of Followers</label>
                                        <input type="number" name="number_of_followers" id="number_of_followers"
                                            class="form-control" value="{{ $company->number_of_followers }}">
                                    </div>

                                    <div class="form-group">
                                        <label>Location</label>
                                        <input type="text" name="location" id="location" class="form-control" value="{{ $company->location }}">
                                    </div>
                                    <div class="form-group mb-0">
                                        <label>Description</label>
                                        <textarea class="form-control" name="description" id="description" data-height="150" required=""
                                            style="height: 150px;" spellcheck="false">{{ $company->description }}</textarea>
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

    <!-- Page Specific JS File -->
@endpush
