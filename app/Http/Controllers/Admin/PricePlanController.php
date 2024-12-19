<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PlanModule;
use App\Models\Pricing;
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
        $data = [
            'plan_modules' => PlanModule::latest()->where('status', 'active')->get(),
        ];
        return view('admin.pages.price_plan.create', $data);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'duration' => 'required|string|in:monthly,year',
            'status' => 'required',
            'currency' => 'required|string|in:taka,euro,pound,dollar',
            'price' => 'required|numeric|min:0',
            'plan_module_id' => 'required|array',  // Make sure the plan module ids are passed as an array
            'plan_module_id.*' => 'exists:plan_modules,id', // Validate each module id is valid
        ]);

        // Create the pricing plan
        $pricingPlan = PricingPlan::create([
            'name' => $validatedData['name'],
            'duration' => $validatedData['duration'],
            'currency' => $validatedData['currency'],
            'price' => $validatedData['price'],
            'status' => $validatedData['status'],
        ]);

        // Loop through the plan modules and create entries in the Pricing table
        foreach ($validatedData['plan_module_id'] as $moduleId) {
            Pricing::create([
                'pricing_plan_id' => $pricingPlan->id,
                'plan_module_id' => $moduleId, // This saves the relationship between the plan and the selected modules
            ]);
        }

        // Redirect back with success message
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
        $data = [
            'item' => PricingPlan::findOrFail($id),
            'plan_modules' => PlanModule::latest()->where('status', 'active')->get(),
            'selected_modules' => Pricing::where('pricing_plan_id', $id)->pluck('plan_module_id')->toArray(),
        ];

        return view('admin.pages.price_plan.edit', $data);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Find the PricingPlan to update
        $item = PricingPlan::findOrFail($id);

        // Validate the incoming request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'duration' => 'required|string|in:monthly,year',
            'status' => 'required',
            'currency' => 'required|string|in:taka,euro,pound,dollar',
            'price' => 'required|numeric|min:0',
            'plan_module_id' => 'nullable|array',  // Ensure plan_module_id is nullable (may not be selected)
            'plan_module_id.*' => 'exists:plan_modules,id',  // Validate each plan_module_id is valid
        ]);

        // Update the pricing plan
        $item->update([
            'name' => $validatedData['name'],
            'duration' => $validatedData['duration'],
            'currency' => $validatedData['currency'],
            'price' => $validatedData['price'],
            'status' => $validatedData['status'],
        ]);

        // First, delete any existing Pricing relationships for this PricingPlan
        $item->pricing()->delete(); // Assumes a one-to-many relationship between PricingPlan and Pricing

        // If new plan modules are selected, create new Pricing relationships
        if (!empty($validatedData['plan_module_id'])) {
            foreach ($validatedData['plan_module_id'] as $moduleId) {
                Pricing::create([
                    'pricing_plan_id' => $item->id,
                    'plan_module_id' => $moduleId,
                ]);
            }
        }

        // Redirect with success message
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
