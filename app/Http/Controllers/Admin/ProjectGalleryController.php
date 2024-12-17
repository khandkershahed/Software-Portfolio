<?php

namespace App\Http\Controllers\Admin;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Models\ProjectGallery;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ProjectGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = ProjectGallery::latest()->get();
        return view('admin.pages.project-gallery.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $projects = Project::where('status', 'active')->latest()->get();
        return view('admin.pages.project-gallery.create', compact('projects'));
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
                $filePath = 'gallery/' . $key;
                $uploadedFiles[$key] = customUpload($file, $filePath);
                if ($uploadedFiles[$key]['status'] === 0) {
                    return redirect()->back()->with('error', $uploadedFiles[$key]['error_message']);
                }
            } else {
                $uploadedFiles[$key] = ['status' => 0];
            }
        }

        // Create the event in the database
        ProjectGallery::create([

            'name'            => $request->name,
            'project_id'      => $request->project_id,
            'title'           => $request->title,
            'date'            => $request->date,
            'status'          => $request->status,

            'image'           => $uploadedFiles['image']['status'] == 1 ? $uploadedFiles['image']['file_path'] : null,


        ]);

        return redirect()->route('admin.project-gallery.index')->with('success', 'Data Inserted Successfully!');
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
        $item = ProjectGallery::findOrFail($id);
        $projects = Project::where('status', 'active')->latest()->get();

        return view('admin.pages.project-gallery.edit', compact('item', 'projects'));
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

        $item = ProjectGallery::findOrFail($id);

        // Define upload paths
        $uploadedFiles = [];

        // Array of files to upload
        $files = [

            'image' => $request->file('image'),
        ];


        foreach ($files as $key => $file) {
            if (!empty($file)) {
                $filePath = 'gallery/' . $key;
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

            'name'            => $request->name,
            'project_id'      => $request->project_id,
            'title'           => $request->title,
            'date'            => $request->date,
            'status'          => $request->status,

            'image'       => $uploadedFiles['image']['status'] == 1 ? $uploadedFiles['image']['file_path'] : $item->image,

        ]);

        return redirect()->route('admin.project-gallery.index')->with('success', 'Data Updated Successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = ProjectGallery::findOrFail($id);
        $item->delete();
    }
}
