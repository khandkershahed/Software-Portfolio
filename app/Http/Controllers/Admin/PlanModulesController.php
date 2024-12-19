<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PlanModule;
use Illuminate\Http\Request;

class PlanModulesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = PlanModule::latest()->get();
        return view('admin.pages.plan_modules.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.plan_modules.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Create the event in the database
        PlanModule::create([

            'type'       => $request->type,
            'title'       => $request->title,
            'value'   => $request->value,
            'currency' => $request->currency,
            'price' => $request->price,
        ]);

        return redirect()->route('admin.plan-modules.index')->with('success', 'Data Inserted Successfully!');
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
        $item = PlanModule::findOrFail($id);
        return view('admin.pages.plan-modules.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $item = PlanModule::findOrFail($id);

        // Update the item with new values
        $item->update([

            'type'       => $request->type,
            'title'       => $request->title,
            'value'   => $request->value,
            'currency' => $request->currency,
            'price' => $request->price,

        ]);

        return redirect()->route('admin.plan-modules.index')->with('success', 'Data Updated Successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = PlanModule::findOrFail($id);
        $item->delete();
    }
}
