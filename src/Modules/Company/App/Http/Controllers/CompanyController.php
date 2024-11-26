<?php

namespace Modules\Company\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Modules\Company\App\Models\Company;
use Modules\Company\App\Services\ImageUploadService;
use RealRashid\SweetAlert\Facades\Alert;

class CompanyController extends Controller
{
    protected $imageUploadService;

    public function __construct(ImageUploadService $imageUploadService)
    {
        $this->imageUploadService = $imageUploadService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companies = Company::all();
        return view('company::index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $type_menu = 'dashboard';
        return view('company::create', compact('type_menu'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'logo' => 'nullable|image|mimes:webp,jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('logo')) {
            $image = $request->file('logo');
    
            if ($image->isValid()) {
                $imagePath = $this->imageUploadService->uploadLogo($image);
                if ($imagePath) {
                    $request->merge(['logo_image' => $imagePath]);
                } else {
                    return redirect()->back()->with('error', 'Invalid Image Format!');
                }
            } else {
                return redirect()->back()->with('error', 'Invalid File!');
            }
        }
        Company::create($request->all());
        Alert::success('Success!', 'Company has been created successfully!');

        return redirect()->route('company.index');
    }
    /**
     * Show the specified resource.
     */
    public function show($id)
    {
        $company = Company::findOrFail($id);
        return view('company::show', compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $company = Company::findOrFail($id);
        Alert::success('Success!', 'Company has been edited successfully!');

        return view('company::edit', compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        if ($request->hasFile('logo')) {
            $image = $request->file('logo');
    
            if ($image->isValid()) {
                $imagePath = $this->imageUploadService->uploadLogo($image);
                if ($imagePath) {
                    $request->merge(['logo_image' => $imagePath]);
                } else {
                    return redirect()->back()->with('error', 'Invalid Image Format!');
                }
            } else {
                return redirect()->back()->with('error', 'Invalid File!');
            }
        }
        $company = Company::findOrFail($id);
        $company->update($request->all());
        Alert::success('Success!', 'Company has been updated successfully!');

        return redirect()->route('company.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $company = Company::findOrFail($id);
        $company->delete();
        Alert::success('Success!', 'Company has been deleted successfully!');

        return redirect()->route('company.index');
    }

    // public function uploadLogo(Request $request)
    // {
    //     $request->validate([
    //         'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //     ]);
    //     if ($request->hasFile('logo') && $request->file('logo')->isValid()) {
    //         $logoPath = $request->file('logo')->store('company/logos', 'public');

    //         return response()->json([
    //             'success' => true,
    //             'logo_path' => $logoPath,
    //         ]);
    //     }

    //     return response()->json([
    //         'success' => false,
    //         'message' => 'File upload failed!',
    //     ]);
    // }
}
