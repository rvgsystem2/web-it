<?php

namespace App\Http\Controllers;

use App\Models\TermCondition;
use Illuminate\Http\Request;

class TermConditionController extends Controller
{
    public function index()
    {
        $termConditions = TermCondition::latest()->get();
        return view('term_conditions.index', compact('termConditions'));
    }

    // Show create form
    public function create()
    {
        return view('term_conditions.form');
    }

    // Store a new term
    public function store(Request $request)
    {
        $request->validate([
            'heading' => 'string|max:255',
            'content' => 'nullable|string',
        ]);

        TermCondition::create($request->only('heading', 'content'));

        return redirect()->route('terms-conditions.index')
            ->with('success', 'Term & Condition created successfully.');
    }

    // Show edit form
    public function edit(TermCondition $term)
    {
        return view('term_conditions.form', ['term' => $term]);
    }

    // Update a term
    public function update(Request $request, TermCondition $term)
    {
        $request->validate([
            'heading' => 'string|max:255',
            'content' => 'nullable|string',
        ]);

        $term->update($request->only('heading', 'content'));

        return redirect()->route('terms-conditions.index')
            ->with('success', 'Term & Condition updated successfully.');
    }

    // Delete a term
    public function delete(TermCondition $term)
    {
        $term->delete();

        return back()
            ->with('success', 'Term & Condition deleted successfully.');
    }
}
