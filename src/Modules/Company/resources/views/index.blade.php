@extends('company::layouts.master')

@section('content')
    <h1>Company List</h1>
    <ul>
        @foreach($companies as $company)
            <li>{{ $company->company_name }}</li>
        @endforeach
    </ul>
@endsection
