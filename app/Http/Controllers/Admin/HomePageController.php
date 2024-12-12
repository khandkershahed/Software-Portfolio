<?php

namespace App\Http\Controllers\Admin;

use App\Models\HomePage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class HomePageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = HomePage::latest()->get();
        return view('admin.pages.homepage.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.homepage.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'row_three_pdf' => 'nullable|file|mimes:pdf|max:10240',
        ]);

        $uploadedFiles = [];

        // Array of files to upload
        $files = [
            'row_three_pdf' => $request->file('row_three_pdf'),
        ];

        foreach ($files as $key => $file) {
            if (!empty($file)) {
                $filePath = 'homepage/' . $key;
                $uploadedFiles[$key] = customUpload($file, $filePath);
                if ($uploadedFiles[$key]['status'] === 0) {
                    return redirect()->back()->with('error', $uploadedFiles[$key]['error_message']);
                }
            } else {
                $uploadedFiles[$key] = ['status' => 0];
            }
        }

        // Create the event in the database
        HomePage::create([

            'row_one_badge' => $request->input('row_one_badge'),
            'row_one_title' => $request->input('row_one_title'),
            'row_one_description' => $request->input('row_one_description'),
            'row_one_link' => $request->input('row_one_link'),

            'row_two_icon_one' => $request->input('row_two_icon_one'),
            'row_two_icon_one_title' => $request->input('row_two_icon_one_title'),
            'row_two_icon_two' => $request->input('row_two_icon_two'),
            'row_two_icon_two_title' => $request->input('row_two_icon_two_title'),
            'row_two_icon_three' => $request->input('row_two_icon_three'),
            'row_two_icon_three_title' => $request->input('row_two_icon_three_title'),
            'row_two_icon_four' => $request->input('row_two_icon_four'),
            'row_two_icon_four_title' => $request->input('row_two_icon_four_title'),

            'row_three_title' => $request->input('row_three_title'),

            'row_four_title' => $request->input('row_four_title'),
            'row_four_description' => $request->input('row_four_description'),

            'row_three_pdf'       => $uploadedFiles['row_three_pdf']['status'] == 1 ? $uploadedFiles['row_three_pdf']['file_path'] : null,
        ]);

        return redirect()->route('admin.homepage.index')->with('success', 'Data Inserted Successfully!');
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
        $item = HomePage::findOrFail($id);
        return view('admin.pages.homepage.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validate the incoming request data
        $request->validate([
            'row_three_pdf' => 'nullable|file|mimes:pdf|max:10240',
        ]);

        $item = HomePage::findOrFail($id);

        // Define upload paths
        $uploadedFiles = [];

        // Array of files to upload
        $files = [
            'row_three_pdf' => $request->file('row_three_pdf'),
        ];

        foreach ($files as $key => $file) {
            if (!empty($file)) {
                $filePath = 'homepage/' . $key;
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

            'row_one_badge' => $request->input('row_one_badge'),
            'row_one_title' => $request->input('row_one_title'),
            'row_one_description' => $request->input('row_one_description'),
            'row_one_link' => $request->input('row_one_link'),

            'row_two_icon_one' => $request->input('row_two_icon_one'),
            'row_two_icon_one_title' => $request->input('row_two_icon_one_title'),
            'row_two_icon_two' => $request->input('row_two_icon_two'),
            'row_two_icon_two_title' => $request->input('row_two_icon_two_title'),
            'row_two_icon_three' => $request->input('row_two_icon_three'),
            'row_two_icon_three_title' => $request->input('row_two_icon_three_title'),
            'row_two_icon_four' => $request->input('row_two_icon_four'),
            'row_two_icon_four_title' => $request->input('row_two_icon_four_title'),

            'row_three_title' => $request->input('row_three_title'),

            'row_four_title' => $request->input('row_four_title'),
            'row_four_description' => $request->input('row_four_description'),

            'row_three_pdf'       => $uploadedFiles['row_three_pdf']['status'] == 1 ? $uploadedFiles['row_three_pdf']['file_path'] : $item->row_three_pdf,



        ]);

        return redirect()->route('admin.homepage.index')->with('success', 'Data Updated Successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = HomePage::findOrFail($id);

        $item->delete();
    }
}
