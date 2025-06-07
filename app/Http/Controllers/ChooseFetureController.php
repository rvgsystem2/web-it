<?php

namespace App\Http\Controllers;

use App\Models\ChooseFeture;
use Illuminate\Http\Request;

class ChooseFetureController extends Controller
{

    public function index()
    {
        $features = ChooseFeture::all();
        return view('choose_feature.index', compact('features'));
    }

    public function create()
    {
        return view('choose_feature.form');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:500',
            'icon' => 'nullable|string|max:255', // could be a class like "fa fa-star"
        ]);

        ChooseFeture::create($data);
        return redirect()->route('choose-features.index')->with('success', 'Feature created successfully.');
    }

    public function edit(ChooseFeture $feature)
    {
        return view('choose_feature.form', ['feature' => $feature]);
    }

    public function update(Request $request, ChooseFeture $feature)
    {
        $data = $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:500',
            'icon' => 'nullable|string|max:255',
        ]);

        $feature->update($data);
        return redirect()->route('choose-features.index')->with('success', 'Feature updated successfully.');
    }

    public function delete(ChooseFeture $feature)
    {
        $feature->delete();
        return redirect()->route('choose-features.index')->with('success', 'Feature deleted successfully.');
    }
}
