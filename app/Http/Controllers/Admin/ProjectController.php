<?php

namespace App\Http\Controllers\Admin;

use App\Models\Project;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Project::latest()->get();
        return view('admin.pages.project.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorys = Category::where('status', 'active')->where('parent_id', null)->latest()->get();
        return view('admin.pages.project.create', compact('categorys'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'logo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_one' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_two' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_three' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'banner_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'row_one_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'row_two_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $uploadedFiles = [];

        // Array of files to upload
        $files = [
            'logo' => $request->file('logo'),
            'image_one' => $request->file('image_one'),
            'image_two' => $request->file('image_two'),
            'image_three' => $request->file('image_three'),
            'banner_image' => $request->file('banner_image'),
            'row_one_image' => $request->file('row_one_image'),
            'row_two_image' => $request->file('row_two_image'),
        ];

        foreach ($files as $key => $file) {
            if (!empty($file)) {
                $filePath = 'project/' . $key;
                $uploadedFiles[$key] = customUpload($file, $filePath);
                if ($uploadedFiles[$key]['status'] === 0) {
                    return redirect()->back()->with('error', $uploadedFiles[$key]['error_message']);
                }
            } else {
                $uploadedFiles[$key] = ['status' => 0];
            }
        }

        // Create the event in the database
        Project::create([

            'category_id'       => $request->category_id,
            'name'       => $request->name,
            'short_description'       => $request->short_description,
            'live_link'       => $request->live_link,

            'client_name'       => $request->client_name,
            'facebook_link'       => $request->facebook_link,
            'linkedin_link'       => $request->linkedin_link,

            'platform'       => json_encode($request->platform),
            'technology'       => json_encode($request->technology),
            'plugin'       => json_encode($request->plugin),

            'duration'       => $request->duration,
            'team'       => $request->team,


            'row_one_badge'       => $request->row_one_badge,
            'row_one_title'       => $request->row_one_title,
            'row_one_description'       => $request->row_one_description,
            'row_one_button_name'       => $request->row_one_button_name,
            'row_one_button_link'       => $request->row_one_button_link,

            'row_two_badge'       => $request->row_two_badge,
            'row_two_title'       => $request->row_two_title,
            'row_two_description'       => $request->row_two_description,
            'row_two_button_name'       => $request->row_two_button_name,
            'row_two_button_link'       => $request->row_two_button_link,
            'row_two_image_title'       => $request->row_two_image_title,
            'row_two_image_description'       => $request->row_two_image_description,
            'row_three_badge'       => $request->row_three_badge,
            'row_three_title'       => $request->row_three_title,
            'row_three_description'       => $request->row_three_description,
            'gallery_title'       => $request->gallery_title,

            'gallery_description'       => $request->gallery_description,
            'row_four_badge'       => $request->row_four_badge,
            'row_four_title'       => $request->row_four_title,
            'row_four_description'       => $request->row_four_description,
            'row_five_title'       => $request->row_five_title,
            'row_five_description'       => $request->row_five_description,
            'status'       => $request->status,



            'logo'       => $uploadedFiles['logo']['status'] == 1 ? $uploadedFiles['logo']['file_path'] : null,
            'image_one'       => $uploadedFiles['image_one']['status'] == 1 ? $uploadedFiles['image_one']['file_path'] : null,
            'image_two'       => $uploadedFiles['image_two']['status'] == 1 ? $uploadedFiles['image_two']['file_path'] : null,
            'image_three'       => $uploadedFiles['image_three']['status'] == 1 ? $uploadedFiles['image_three']['file_path'] : null,
            'banner_image'       => $uploadedFiles['banner_image']['status'] == 1 ? $uploadedFiles['banner_image']['file_path'] : null,
            'row_one_image'       => $uploadedFiles['row_one_image']['status'] == 1 ? $uploadedFiles['row_one_image']['file_path'] : null,
            'row_two_image'       => $uploadedFiles['row_two_image']['status'] == 1 ? $uploadedFiles['row_two_image']['file_path'] : null,
            // 'created_by'  => Auth::guard('admin')->user()->id,
        ]);

        return redirect()->route('admin.project.index')->with('success', 'Data Inserted Successfully!');
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
        $item = Project::findOrFail($id);
        $categorys = Category::where('status', 'active')->where('parent_id', null)->latest()->get();

        return view('admin.pages.project.edit', compact('item','categorys'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the incoming request data
        $request->validate([
            'logo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_one' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_two' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'image_three' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'banner_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'row_one_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'row_two_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $item = Project::findOrFail($id);

        // Define upload paths
        $uploadedFiles = [];

        // Array of files to upload
        $files = [

            'logo' => $request->file('logo'),
            'image_one' => $request->file('image_one'),
            'image_two' => $request->file('image_two'),
            'image_three' => $request->file('image_three'),
            'banner_image' => $request->file('banner_image'),
            'row_one_image' => $request->file('row_one_image'),
            'row_two_image' => $request->file('row_two_image'),
        ];

        foreach ($files as $key => $file) {
            if (!empty($file)) {
                $filePath = 'project/' . $key;
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

            'category_id'       => $request->category_id,
            'name'       => $request->name,
            'short_description'       => $request->short_description,
            'live_link'       => $request->live_link,

            'client_name'       => $request->client_name,
            'facebook_link'       => $request->facebook_link,
            'linkedin_link'       => $request->linkedin_link,

            'platform'       => json_encode($request->platform),
            'technology'       => json_encode($request->technology),
            'plugin'       => json_encode($request->plugin),

            'duration'       => $request->duration,
            'team'       => $request->team,


            'row_one_badge'       => $request->row_one_badge,
            'row_one_title'       => $request->row_one_title,
            'row_one_description'       => $request->row_one_description,
            'row_one_button_name'       => $request->row_one_button_name,
            'row_one_button_link'       => $request->row_one_button_link,

            'row_two_badge'       => $request->row_two_badge,
            'row_two_title'       => $request->row_two_title,
            'row_two_description'       => $request->row_two_description,
            'row_two_button_name'       => $request->row_two_button_name,
            'row_two_button_link'       => $request->row_two_button_link,
            'row_two_image_title'       => $request->row_two_image_title,
            'row_two_image_description'       => $request->row_two_image_description,
            'row_three_badge'       => $request->row_three_badge,
            'row_three_title'       => $request->row_three_title,
            'row_three_description'       => $request->row_three_description,
            'gallery_title'       => $request->gallery_title,

            'gallery_description'       => $request->gallery_description,
            'row_four_badge'       => $request->row_four_badge,
            'row_four_title'       => $request->row_four_title,
            'row_four_description'       => $request->row_four_description,
            'row_five_title'       => $request->row_five_title,
            'row_five_description'       => $request->row_five_description,
            'status'       => $request->status,


            'logo'       => $uploadedFiles['logo']['status'] == 1 ? $uploadedFiles['logo']['file_path'] : $item->logo,
            'image_one'       => $uploadedFiles['image_one']['status'] == 1 ? $uploadedFiles['image_one']['file_path'] : $item->image_one,
            'image_two'       => $uploadedFiles['image_two']['status'] == 1 ? $uploadedFiles['image_two']['file_path'] : $item->image_two,

            'image_three'       => $uploadedFiles['image_three']['status'] == 1 ? $uploadedFiles['image_three']['file_path'] : $item->image_three,

            'banner_image'       => $uploadedFiles['banner_image']['status'] == 1 ? $uploadedFiles['banner_image']['file_path'] : $item->banner_image,

            'row_one_image'       => $uploadedFiles['row_one_image']['status'] == 1 ? $uploadedFiles['row_one_image']['file_path'] : $item->row_one_image,

            'row_two_image'       => $uploadedFiles['row_two_image']['status'] == 1 ? $uploadedFiles['row_two_image']['file_path'] : $item->row_two_image,
            

        ]);

        return redirect()->route('admin.project.index')->with('success', 'Data Updated Successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Project::findOrFail($id);

        $item->delete();
    }

    public function projectStatus(Request $request, $id)
    {
        // Find the page banner by ID
        $item = Project::findOrFail($id);

        // Update the status
        $item->status = $request->status;  // 'active' or 'inactive'
        $item->save();  // Save the changes to the database

        return response()->json(['success' => true]);
    }
}
