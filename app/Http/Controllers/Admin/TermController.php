<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Term;
use Illuminate\Http\Request;

class TermController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Term::latest()->get();
        return view('admin.pages.term.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.term.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'name' => 'nullable|string|max:255',
            'content' => 'nullable|string',
            'version' => 'nullable|string|max:255',
            'effective_date' => 'nullable|date',
            'expiration_date' => 'nullable|date',
            'status' => 'nullable|in:active,inactive'
        ]);

        try {
            // Create a new term and condition entry
            Term::create([
                'name' => $validated['name'],
                'content' => $validated['content'],
                'version' => $validated['version'],
                'effective_date' => $validated['effective_date'],
                'expiration_date' => $validated['expiration_date'],
                'status' => $validated['status']
            ]);

            // Redirect to the term index page with a success message
            return redirect()->route('admin.term.index')->with('success', 'Term & Condition created successfully.');
        } catch (\Exception $e) {
            // Handle any errors that occur during saving
            return back()->withErrors(['error' => 'Something went wrong. Please try again.'])->withInput();
        }
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
        $item = Term::findOrFail($id);
        return view('admin.pages.term.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $item = Term::findOrFail($id);

        // Validate the incoming data
        $validated = $request->validate([
            'name' => 'nullable|string|max:255',
            'content' => 'nullable|string',
            'version' => 'nullable|string|max:255',
            'effective_date' => 'nullable|date',
            'expiration_date' => 'nullable|date',
            'status' => 'nullable|in:active,inactive',
        ]);

        // Update the term record
        $item->update($validated);

        // Redirect back to the index page with a success message
        return redirect()->route('admin.term.index')->with('success', 'Term & Condition updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Term::findOrFail($id);
        $item->delete();
    }

    public function termStatus(Request $request, $id)
    {
        // Find the page banner by ID
        $item = Term::findOrFail($id);

        // Update the status
        $item->status = $request->status;  // 'active' or 'inactive'
        $item->save();  // Save the changes to the database

        return response()->json(['success' => true]);
    }
}
