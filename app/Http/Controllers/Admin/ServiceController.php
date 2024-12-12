<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Service::latest()->get();
        return view('admin.pages.service.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:1024',
            'logo' => 'image|mimes:jpeg,png,jpg,gif|max:1024',
            'banner_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'middle_image_one' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'middle_image_two' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $uploadedFiles = [];

        // Array of files to upload
        $files = [
            'logo' => $request->file('logo'),
            'image' => $request->file('image'),
            'banner_image' => $request->file('banner_image'),
            'middle_image_one' => $request->file('middle_image_one'),
            'middle_image_two' => $request->file('middle_image_two'),
        ];

        foreach ($files as $key => $file) {
            if (!empty($file)) {
                $filePath = 'service/' . $key;
                $uploadedFiles[$key] = customUpload($file, $filePath);
                if ($uploadedFiles[$key]['status'] === 0) {
                    return redirect()->back()->with('error', $uploadedFiles[$key]['error_message']);
                }
            } else {
                $uploadedFiles[$key] = ['status' => 0];
            }
        }

        // Create the event in the database
        Service::create([

            'name'       => $request->name,
            'short_description'       => $request->short_description,
            'description'   => $request->description,
            'footer' => $request->footer,
            'status'      => $request->status,

            'logo'       => $uploadedFiles['logo']['status'] == 1 ? $uploadedFiles['logo']['file_path'] : null,
            'image'       => $uploadedFiles['image']['status'] == 1 ? $uploadedFiles['image']['file_path'] : null,
            'banner_image'       => $uploadedFiles['banner_image']['status'] == 1 ? $uploadedFiles['banner_image']['file_path'] : null,

            'middle_image_one'       => $uploadedFiles['middle_image_one']['status'] == 1 ? $uploadedFiles['middle_image_one']['file_path'] : null,

            'middle_image_two'       => $uploadedFiles['middle_image_two']['status'] == 1 ? $uploadedFiles['middle_image_two']['file_path'] : null,


        ]);

        return redirect()->route('admin.service.index')->with('success', 'Data Inserted Successfully!');
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
        $item = Service::findOrFail($id);
        return view('admin.pages.service.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the incoming request data
        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:1024',
            'logo' => 'image|mimes:jpeg,png,jpg,gif|max:1024',
            'banner_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'middle_image_one' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'middle_image_two' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $item = Service::findOrFail($id);

        // Define upload paths
        $uploadedFiles = [];

        // Array of files to upload
        $files = [

            'logo' => $request->file('logo'),
            'image' => $request->file('image'),
            'banner_image' => $request->file('banner_image'),
            'middle_image_one' => $request->file('middle_image_one'),
            'middle_image_two' => $request->file('middle_image_two'),
        ];

        foreach ($files as $key => $file) {
            if (!empty($file)) {
                $filePath = 'service/' . $key;
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

            'name'       => $request->name,
            'short_description'       => $request->short_description,
            'description'   => $request->description,
            'footer' => $request->footer,
            'status'      => $request->status,


            'logo'       => $uploadedFiles['logo']['status'] == 1 ? $uploadedFiles['logo']['file_path'] : $item->logo,
            'image'       => $uploadedFiles['image']['status'] == 1 ? $uploadedFiles['image']['file_path'] : $item->image,

            'banner_image'       => $uploadedFiles['banner_image']['status'] == 1 ? $uploadedFiles['banner_image']['file_path'] : $item->banner_image,

            'middle_image_one'       => $uploadedFiles['middle_image_one']['status'] == 1 ? $uploadedFiles['middle_image_one']['file_path'] : $item->middle_image_one,

            'middle_image_two'       => $uploadedFiles['middle_image_two']['status'] == 1 ? $uploadedFiles['middle_image_two']['file_path'] : $item->middle_image_two,



        ]);

        return redirect()->route('admin.service.index')->with('success', 'Data Updated Successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Service::findOrFail($id);

        $files = [
            'logo' => $item->logo,
            'image' => $item->image,
            'banner_image' => $item->banner_image,
            'middle_image_one' => $item->middle_image_one,
            'middle_image_two' => $item->middle_image_two,
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
    }

    public function serviceStatus(Request $request, $id)
    {
        // Find the page banner by ID
        $item = Service::findOrFail($id);

        // Update the status
        $item->status = $request->status;  // 'active' or 'inactive'
        $item->save();  // Save the changes to the database

        return response()->json(['success' => true]);
    }
}
