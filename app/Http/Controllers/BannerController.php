<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::latest()->get();
        return view('banners.index', compact('banners'));
    }

    // Show the form for creating a new banner
    public function create()
    {
        return view('banners.create');
    }

    // Store a newly created banner
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'banner' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $bannerPath = null;
        if ($request->hasFile('banner')) {
            $bannerPath = $request->file('banner')->store('banners', 'public');
        }

        Banner::create([
            'title' => $request->title,
            'banner' => $bannerPath,
        ]);

        return redirect('banner')->with('success', 'Banner created successfully.');
    }



    // Show the form for editing the specified banner
    public function edit(Banner $banner)
    {
        return view('banners.create', compact('banner'));
    }

    // Update the specified banner
    public function update(Request $request, Banner $banner)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'banner' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $bannerPath = $banner->banner;
        if ($request->hasFile('banner')) {
            // Delete old banner if needed
            if ($bannerPath && Storage::disk('public')->exists($bannerPath)) {
                Storage::disk('public')->delete($bannerPath);
            }
            $bannerPath = $request->file('banner')->store('banners', 'public');
        }

        $banner->update([
            'title' => $request->title,
            'banner' => $bannerPath,
        ]);

        return redirect('banner')->with('success', 'Banner updated successfully.');
    }

    // Delete the specified banner
    public function delete(Banner $banner)
    {
        if ($banner->banner && Storage::disk('public')->exists($banner->banner)) {
            Storage::disk('public')->delete($banner->banner);
        }

        $banner->delete();

        return back()->with('success', 'Banner deleted successfully.');
    }

    public function status(Request $request, Banner $banner)
    {
        $request->validate([
            'status' => 'required|in:active,inactive',
        ]);

        $banner->update(['status' => $request->status]);

        return back()->with('success', 'Banner status updated.');
    }
}
