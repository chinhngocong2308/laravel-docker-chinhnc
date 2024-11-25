@extends('layouts.company.company-job')
@section('title', 'Company Job List')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')

    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Create Company</h1>
            </div>

            <div class="section-body">
                <h2 class="section-title">Company List</h2>
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Simple Table</h4>
                            </div>



                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table-bordered table-md table">
                                        <tr>
                                            <th>ID</th>
                                            <th>Company Name</th>
                                            <th>Industry</th>
                                            <th>Number Of Employee</th>
                                            <th>Location</th>
                                            <th>Description</th>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>

                                        @foreach ($companies as $company)
                                            <tr>
                                                <td>{{ $company->id }} </td>
                                                <td>{{ $company->company_name }}</td>
                                                <td>{{ $company->industry }}</td>
                                                <td>{{ formatNumber($company->number_of_followers) }}</td>
                                                <td>{{ $company->location }}</td>
                                                <td>{{ $company->description }}</td>
                                                <td><a href="{{ route('company.show', $company->id) }}"
                                                        class="btn btn-secondary">View</a></td>

                                                <td><a href="{{ route('company.edit', $company->id) }}"
                                                        class="btn btn-secondary">Edit</a></td>
                                                <td>
                                                    <form action="{{ route('company.destroy', $company->id) }}"
                                                        method="POST" style="display:inline;">
                                                        @csrf @method('DELETE') <button class="btn btn-secondary"
                                                            type="submit">Delete</button>
                                                    </form>
                                                </td>

                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <nav class="d-inline-block">
                                    <ul class="pagination mb-0">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1"><i
                                                    class="fas fa-chevron-left"></i></a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1 <span
                                                    class="sr-only">(current)</span></a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">2</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
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
