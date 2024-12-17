<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectQuery;
use Illuminate\Http\Request;

class ProjectQueryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = ProjectQuery::latest()->get();
        return view('admin.pages.project-query.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $projects = Project::where('status', 'active')->latest()->get();
        return view('admin.pages.project-query.create', compact('projects'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Create the event in the database
        ProjectQuery::create([

            'project_id'       => $request->project_id,
            'name'       => $request->name,
            'email'       => $request->email,

            'phone'       => $request->phone,
            'message'       => $request->message,

            'complete_template'       => $request->complete_template,
        ]);

        return redirect()->route('admin.project-query.index')->with('success', 'Data Inserted Successfully!');
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
        $item = ProjectQuery::findOrFail($id);
        $projects = Project::where('status', 'active')->latest()->get();

        return view('admin.pages.project-query.edit', compact('item', 'projects'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $item = ProjectQuery::findOrFail($id);

        $item->update([

            'project_id'       => $request->project_id,
            'name'       => $request->name,
            'email'       => $request->email,

            'phone'       => $request->phone,
            'message'       => $request->message,

            'complete_template'       => $request->complete_template,


        ]);

        return redirect()->route('admin.project-query.index')->with('success', 'Data Updated Successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = ProjectQuery::findOrFail($id);

        $item->delete();
    }
}
