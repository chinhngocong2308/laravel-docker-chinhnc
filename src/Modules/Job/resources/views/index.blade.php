@extends('job::layouts.master')

@section('content')
    <h1>Job List</h1>
    <ul>
        @foreach($jobs as $job)
            <li>{{ $job->job_title }} at {{ $job->company->company_name }}</li>
        @endforeach
    </ul>
@endsection
