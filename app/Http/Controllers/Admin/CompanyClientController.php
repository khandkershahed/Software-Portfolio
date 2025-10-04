<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\CompanyClient;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CompanyClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = CompanyClient::latest()->get();
        return view('admin.pages.company_client.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.company_client.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'logo' => 'image|mimes:jpeg,png,jpg,gif,webp|max:1024',
            'banner_image' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $uploadedFiles = [];

        // Array of files to upload
        $files = [
            'logo' => $request->file('logo'),
            'banner_image' => $request->file('banner_image'),
        ];

        foreach ($files as $key => $file) {
            if (!empty($file)) {
                $filePath = 'companyclient/' . $key;
                $uploadedFiles[$key] = customUpload($file, $filePath);
                if ($uploadedFiles[$key]['status'] === 0) {
                    return redirect()->back()->with('error', $uploadedFiles[$key]['error_message']);
                }
            } else {
                $uploadedFiles[$key] = ['status' => 0];
            }
        }

        // Create the event in the database
        CompanyClient::create([

            'company_name'    => $request->company_name,
            'company_website' => $request->company_website,
            'status'          => $request->status,

            'logo'            => $uploadedFiles['logo']['status']         == 1 ? $uploadedFiles['logo']['file_path']        : null,
            'banner_image'    => $uploadedFiles['banner_image']['status'] == 1 ? $uploadedFiles['banner_image']['file_path'] : null,

            'created_by'      => Auth::guard('admin')->user()->id,
        ]);

        return redirect()->route('admin.company-client.index')->with('success', 'Data Inserted Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = CompanyClient::findOrFail($id);
        return view('admin.pages.company_client.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the incoming request data
        $request->validate([
            'logo' => 'image|mimes:jpeg,png,jpg,gif,webp|max:1024',
            'banner_image' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $item = CompanyClient::findOrFail($id);

        // Define upload paths
        $uploadedFiles = [];

        // Array of files to upload
        $files = [
            'logo' => $request->file('logo'),
            'banner_image' => $request->file('banner_image'),
        ];

        foreach ($files as $key => $file) {
            if (!empty($file)) {
                $filePath = 'page-banner/' . $key;
                $oldFile = $item->$key ?? null;

                if ($oldFile) {
                    Storage::delete("companyclient/" . $oldFile);
                }
                $uploadedFiles[$key] = customUpload($file, $filePath);
                if ($uploadedFiles[$key]['status'] === 0) {
                    return redirect()->back()->with('error', $uploadedFiles[$key]['error_message']);
                }
            } else {
                $uploadedFiles[$key] = ['status' => 0];
            }
        }

        // Update the item with new values
        $item->update([

            'company_name'       => $request->company_name,
            'company_website'       => $request->company_website,
            'status'      => $request->status,

            'logo'       => $uploadedFiles['logo']['status'] == 1 ? $uploadedFiles['logo']['file_path'] : $item->logo,
            'banner_image'       => $uploadedFiles['banner_image']['status'] == 1 ? $uploadedFiles['banner_image']['file_path'] : $item->banner_image,

            'updated_by'  => Auth::guard('admin')->user()->id,

        ]);

        return redirect()->route('admin.company-client.index')->with('success', 'Data Updated Successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = CompanyClient::findOrFail($id);

        $files = [
            'logo' => $item->logo,
            'banner_image' => $item->banner_image,
        ];
        foreach ($files as $key => $file) {
            if (!empty($file)) {
                $oldFile = $item->$key ?? null;
                if ($oldFile) {
                    Storage::delete("companyclient/" . $oldFile);
                }
            }
        }
        $item->delete();
    }

    public function companyClient(Request $request, $id)
    {
        // Find the page banner by ID
        $item = CompanyClient::findOrFail($id);

        // Update the status
        $item->status = $request->status;  // 'active' or 'inactive'
        $item->save();  // Save the changes to the database

        return response()->json(['success' => true]);
    }
}
