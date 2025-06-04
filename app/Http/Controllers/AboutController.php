<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    // Display a listing of the resource.
    public function index()
    {
        // Logic to display all about entries
        $abouts = About::latest()->get();
        return view('about.index', compact('abouts'));
    }
    // Show the form for creating a new resource.
    public function create()
    {
        // Logic to show the form for creating a new about entry

        return view('about.create');
    }

    // Store a newly created resource in storage.   
  public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png',
            'f_1' => 'nullable|string',
            'f_2' => 'nullable|string',
            'f_3' => 'nullable|string',
            'f_4' => 'nullable|string',
            'call_to_title' => 'nullable|string',
            'call_to_number' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('abouts', 'public');
        }

        About::create($data);
        return redirect()->route('about.index')->with('success', 'About created successfully.');
    }

    // Show the form for editing the specified resource.
     public function edit(About $about)
    {
        return view('about.create', compact('about'));
    }

    public function update(Request $request, About $about)
    {
        $data = $request->validate([
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpg,jpeg,png',
            'f_1' => 'nullable|string',
            'f_2' => 'nullable|string',
            'f_3' => 'nullable|string',
            'f_4' => 'nullable|string',
            'call_to_title' => 'nullable|string',
            'call_to_number' => 'nullable|string',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('abouts', 'public');
        }

        $about->update($data);
        return redirect()->route('about.index')->with('success', 'About updated successfully.');
    }

    public function delete(About $about)
    {
        // Logic to delete the specified about entry
        if ($about->image) {
            Storage::disk('public')->delete($about->image);
        }
        $about->delete();

        return redirect()->route('about.index')->with('success', 'About deleted successfully.');
    }


}