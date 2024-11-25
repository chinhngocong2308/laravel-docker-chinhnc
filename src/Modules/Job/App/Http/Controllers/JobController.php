<?php

namespace Modules\Job\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Company\App\Models\Company;
use Modules\Job\App\Models\Job;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jobs = Job::all();
        return view('job::index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $companies = Company::all();
        return view('job::create', compact('companies'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        Job::create($request->all());
        return redirect()->route('job.index');
    }

    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        $job = Job::findOrFail($id);
        $companies = Company::all();

        return view('job::show', compact('job', 'companies'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $job = Job::findOrFail($id);
        $companies = Company::all();
        return view('job::edit', compact('job', 'companies'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $job = Job::findOrFail($id);
        $job->update($request->all());
        return redirect()->route('job.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $job = Job::findOrFail($id);
        $job->delete();
        return redirect()->route('job.index');
    }
}
