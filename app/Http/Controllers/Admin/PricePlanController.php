<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PricingPlan;
use Illuminate\Http\Request;

class PricePlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = PricingPlan::latest()->get();
        return view('admin.pages.price_plan.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.price_plan.create');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Create the event in the database
        PricingPlan::create([

            'name'       => $request->name,
            'duration'       => $request->duration,
            'currency' => $request->currency,
            'price' => $request->price,
        ]);

        return redirect()->route('admin.price-plan.index')->with('success', 'Data Inserted Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $item = PricingPlan::findOrFail($id);
        return view('admin.pages.price_plan.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $item = PricingPlan::findOrFail($id);

        // Update the item with new values
        $item->update([

            'name'       => $request->name,
            'duration'       => $request->duration,
            'currency' => $request->currency,
            'price' => $request->price,

        ]);

        return redirect()->route('admin.price-plan.index')->with('success', 'Data Updated Successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = PricingPlan::findOrFail($id);
        $item->delete();
    }

}
