<?php

namespace App\Http\Controllers\Admin;

use App\Models\PageBanner;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PageBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = PageBanner::latest()->get();
        return view('admin.pages.pagebanner.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.pagebanner.create');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $uploadedFiles = [];

        // Array of files to upload
        $files = [
            'image' => $request->file('image'),
        ];

        foreach ($files as $key => $file) {
            if (!empty($file)) {
                $filePath = 'page-banner/' . $key;
                $uploadedFiles[$key] = customUpload($file, $filePath);
                if ($uploadedFiles[$key]['status'] === 0) {
                    return redirect()->back()->with('error', $uploadedFiles[$key]['error_message']);
                }
            } else {
                $uploadedFiles[$key] = ['status' => 0];
            }
        }

        // Create the event in the database
        PageBanner::create([

            'badge' => $request->badge,
            'title' => $request->title,
            'page_name' => $request->page_name,

            'button_name' => $request->button_name,
            'button_link' => $request->button_link,
            'banner_link' => $request->banner_link,

            'status' => $request->status,

            'image' => $uploadedFiles['image']['status'] == 1 ? $uploadedFiles['image']['file_path'] : null,
        ]);

        return redirect()->route('admin.page-banner.index')->with('success', 'Data Inserted Successfully!');
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
        $item = PageBanner::findOrFail($id);
        return view('admin.pages.pagebanner.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the incoming request data
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $item = PageBanner::findOrFail($id);

        // Define upload paths
        $uploadedFiles = [];

        // Array of files to upload
        $files = [
            'image' => $request->file('image'),
        ];

        foreach ($files as $key => $file) {
            if (!empty($file)) {
                $filePath = 'page-banner/' . $key;
                $oldFile = $item->$key ?? null;

                if ($oldFile) {
                    Storage::delete("public/" . $oldFile);
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

            'badge' => $request->badge,
            'title' => $request->title,
            'page_name' => $request->page_name,

            'button_name' => $request->button_name,
            'button_link' => $request->button_link,
            'banner_link' => $request->banner_link,

            'status' => $request->status,

            'image' => $uploadedFiles['image']['status'] == 1 ? $uploadedFiles['image']['file_path'] : $item->image,

        ]);

        return redirect()->route('admin.page-banner.index')->with('success', 'Data Updated Successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = PageBanner::findOrFail($id);

        $files = [
            'image' => $item->image,
        ];
        foreach ($files as $key => $file) {
            if (!empty($file)) {
                $oldFile = $item->$key ?? null;
                if ($oldFile) {
                    Storage::delete("public/" . $oldFile);
                }
            }
        }
        $item->delete();

        // return redirect()->route('admin.page-banner.index')->with('success', 'Data Delete Successfully!!');
    }

    public function toggleStatus(Request $request, $id)
    {
        // Find the page banner by ID
        $item = PageBanner::findOrFail($id);

        // Update the status
        $item->status = $request->status;  // 'active' or 'inactive'
        $item->save();  // Save the changes to the database

        return response()->json(['success' => true]);
    }
}
