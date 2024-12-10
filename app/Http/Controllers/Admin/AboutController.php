<?php

namespace App\Http\Controllers\Admin;

use App\Models\AboutUs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = AboutUs::latest()->get();
        return view('admin.pages.about.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([

            'row_one_image_big' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'row_one_image_small' => 'image|mimes:jpeg,png,jpg,gif|max:1024',
            'row_three_image_big' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'row_three_image_small' => 'image|mimes:jpeg,png,jpg,gif|max:1024',

        ]);

        $uploadedFiles = [];

        // Array of files to upload
        $files = [
            'row_one_image_big' => $request->file('row_one_image_big'),
            'row_one_image_small' => $request->file('row_one_image_small'),
            'row_three_image_big' => $request->file('row_three_image_big'),
            'row_three_image_small' => $request->file('row_three_image_small'),
        ];

        foreach ($files as $key => $file) {
            if (!empty($file)) {
                $filePath = 'about/' . $key;
                $uploadedFiles[$key] = customUpload($file, $filePath);
                if ($uploadedFiles[$key]['status'] === 0) {
                    return redirect()->back()->with('error', $uploadedFiles[$key]['error_message']);
                }
            } else {
                $uploadedFiles[$key] = ['status' => 0];
            }
        }

        // Create the event in the database
        AboutUs::create([

            'row_one_badge'       => $request->row_one_badge,
            'row_one_title'       => $request->row_one_title,
            'row_one_description'   => $request->row_one_description,
            'row_one_button_name' => $request->row_one_button_name,
            'row_one_button_url' => $request->row_one_button_url,

            'row_three_badge' => $request->row_three_badge,
            'row_three_title' => $request->row_three_title,
            'row_three_description' => $request->row_three_description,
            'row_three_button_name' => $request->row_three_button_name,
            'row_three_button_url' => $request->row_three_button_url,

            

            'row_one_image_big'       => $uploadedFiles['row_one_image_big']['status'] == 1 ? $uploadedFiles['row_one_image_big']['file_path'] : null,

            'row_one_image_small'       => $uploadedFiles['row_one_image_small']['status'] == 1 ? $uploadedFiles['row_one_image_small']['file_path'] : null,

            'row_three_image_big'       => $uploadedFiles['row_three_image_big']['status'] == 1 ? $uploadedFiles['row_three_image_big']['file_path'] : null,

            'row_three_image_small'       => $uploadedFiles['row_three_image_small']['status'] == 1 ? $uploadedFiles['row_three_image_small']['file_path'] : null,

            
        ]);

        return redirect()->route('admin.about.index')->with('success', 'Data Inserted Successfully!');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
