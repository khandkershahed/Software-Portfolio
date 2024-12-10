<?php

namespace App\Http\Controllers\Admin;

use App\Models\CompanyData;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CompanyDataController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = CompanyData::latest()->get();
        return view('admin.pages.company_data.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.company_data.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Create the event in the database
        CompanyData::create([

            'title'      => $request->title,
            'icon'       => $request->icon,
            'link'       => $request->link,
            'data'       => $request->data,
            'status'     => $request->status,

            'created_by'  => Auth::guard('admin')->user()->id,
        ]);

        return redirect()->route('admin.company-data.index')->with('success', 'Data Inserted Successfully!');
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
        $item = CompanyData::findOrFail($id);
        return view('admin.pages.company-data.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item = CompanyData::findOrFail($id);

        // Update the item with new values
        $item->update([

            'title'      => $request->title,
            'icon'       => $request->icon,
            'link'       => $request->link,
            'data'       => $request->data,
            'status'     => $request->status,

            'updated_by'  => Auth::guard('admin')->user()->id,

        ]);

        return redirect()->route('admin.company-data.index')->with('success', 'Data Updated Successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = CompanyData::findOrFail($id);
        $item->delete();
    }

    public function companyData(Request $request, $id)
    {
        // Find the page banner by ID
        $item = CompanyData::findOrFail($id);

        // Update the status
        $item->status = $request->status;  // 'active' or 'inactive'
        $item->save();  // Save the changes to the database

        return response()->json(['success' => true]);
    }
}
