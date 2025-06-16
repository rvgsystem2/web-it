<?php

namespace App\Http\Controllers;

use App\Models\SocialLink;
use Illuminate\Http\Request;

class SocialLinkController extends Controller
{
    public function index()
    {
        $socialLinks = SocialLink::latest()->get();
        return view('social_links.index', compact('socialLinks'));
    }

    // Show create form
    public function create()
    {
        return view('social_links.form');
    }

    // Store new social link
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'icon' => 'nullable|string|max:255',
            'url' => 'required|url|max:255',
            'status' => 'required|boolean',
        ]);

        SocialLink::create($request->only('name', 'icon', 'url', 'status'));

        return redirect()->route('social-links.index')
            ->with('success', 'Social link created successfully.');
    }

    // Show edit form
    public function edit(SocialLink $link)
    {
        return view('social_links.form', ['link' => $link]);
    }

    // Update social link
    public function update(Request $request, SocialLink $link)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'icon' => 'nullable|string|max:255',
            'url' => 'required|url|max:255',
            'status' => 'required|boolean',
        ]);

        $link->update($request->only('name', 'icon', 'url', 'status'));

        return redirect()->route('social-links.index')
            ->with('success', 'Social link updated successfully.');
    }

    // Delete social link
    public function delete(SocialLink $link)
    {
        $link->delete();

        return back()->with('success', 'Social link deleted successfully.');
    }
}
