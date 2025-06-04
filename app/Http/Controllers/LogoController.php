<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use Illuminate\Http\Request;

class LogoController extends Controller
{
     public function index()
    {
        $logos = Logo::latest()->get();
        return view('logo.index', compact('logos'));
    }

    public function create()
    {
        return view('logo.form');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('logos', 'public');
        }

        Logo::create($data);
        return redirect()->route('logos.index')->with('success', 'Logo added successfully.');
    }

    public function edit(Logo $logo)
    {
        return view('logo.form', compact('logo'));
    }

    public function update(Request $request, Logo $logo)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('logos', 'public');
        }

        $logo->update($data);
        return redirect()->route('logos.index')->with('success', 'Logo updated successfully.');
    }

    public function delete(Logo $logo)
    {
        $logo->delete();
        return redirect()->route('logos.index')->with('success', 'Logo deleted successfully.');
    }
}
