<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Privacy;
use Illuminate\Http\Request;

class PrivacyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Privacy::latest()->get();
        return view('admin.pages.privacy.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.privacy.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        Privacy::create([

            'title'       => $request->title,
            'content'       => $request->content,
            'version'   => $request->version,
            'effective_date' => $request->effective_date,
            'expiration_date' => $request->expiration_date,
            'status'      => $request->status,
        ]);

        return redirect()->route('admin.privacy.index')->with('success', 'Data Inserted Successfully!');
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
        $item = Privacy::findOrFail($id);
        return view('admin.pages.privacy.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $item = Privacy::findOrFail($id);

        // Update the item with new values
        $item->update([

            'title'       => $request->title,
            'content'       => $request->content,
            'version'   => $request->version,
            'effective_date' => $request->effective_date,
            'expiration_date' => $request->expiration_date,
            'status'      => $request->status,

        ]);

        return redirect()->route('admin.privacy.index')->with('success', 'Data Updated Successfully!!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Privacy::findOrFail($id);
        $item->delete();
    }

    public function privacyStatus(Request $request, $id)
    {
        // Find the page banner by ID
        $item = Privacy::findOrFail($id);

        // Update the status
        $item->status = $request->status;  // 'active' or 'inactive'
        $item->save();  // Save the changes to the database

        return response()->json(['success' => true]);
    }
}
