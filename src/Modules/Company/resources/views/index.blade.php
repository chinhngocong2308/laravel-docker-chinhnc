@extends('layouts.company.company-job')
@section('title', 'Company Job List')
@push('style')
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px;
        }

        .filter-section {
            max-width: 600px;
            margin: 0 auto 20px auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .filter-section select {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }

        .company-list {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .company-item {
            border-bottom: 1px solid #e0e0e0;
            padding: 15px 0;
        }

        .company-item:last-child {
            border-bottom: none;
        }

        .company-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .company-header h2 {
            margin: 0;
            font-size: 18px;
        }

        .company-follow-button {
            background-color: #0073b1;
            color: #fff;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            cursor: pointer;
        }

        .company-follow-button:hover {
            background-color: #005f8a;
        }

        .company-details {
            margin-top: 5px;
            color: #777;
        }
    </style>
@endpush
@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Company List</h1>
            </div>

            <div class="section-body">

                <ul>
                    @foreach ($companies as $company)
                        <li>{{ $company->company_name }} - <a href="{{ route('company.show', $company->id) }}">View</a> - <a
                                href="{{ route('company.edit', $company->id) }}">Edit</a> - <form
                                action="{{ route('company.destroy', $company->id) }}" method="POST" style="display:inline;">
                                @csrf @method('DELETE') <button type="submit">Delete</button></form>
                        </li>
                    @endforeach
                </ul>

                {{-- <ul>
                    @foreach ($companies as $company)
                        <li>{{ $company->company_name }}</li>
                    @endforeach
                </ul> --}}
            </div>
        </section>
    </div>
@endsection

@push('scripts')

@endpush
