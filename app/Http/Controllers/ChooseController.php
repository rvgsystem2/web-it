<?php

namespace App\Http\Controllers;

use App\Models\Choose;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ChooseController extends Controller
{
     public function index()
    {
        $chooses = Choose::latest()->get();
        return view('choose.index', compact('chooses'));
    }

    public function create()
    {
        return view('choose.form');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'nullable|string|max:255',
            'sub_title' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('chooses', 'public');
        }

        Choose::create($data);
        return redirect()->route('chooses.index')->with('success', 'Choose item created successfully.');
    }

    public function edit(Choose $choose)
    {
        return view('choose.form', compact('choose'));
    }

    public function update(Request $request, Choose $choose)
    {
        $data = $request->validate([
            'title' => 'nullable|string|max:255',
            'sub_title' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('chooses', 'public');
        }

        $choose->update($data);
        return redirect()->route('chooses.index')->with('success', 'Choose item updated successfully.');
    }

    public function delete(Choose $choose)
    {
        if ($choose->image) {
            Storage::disk('public')->delete($choose->image);
        }
        $choose->delete();
        return redirect()->route('chooses.index')->with('success', 'Choose item deleted successfully.');
    }
}
