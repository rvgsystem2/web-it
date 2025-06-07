<?php

namespace App\Http\Controllers;

use App\Models\ServiceFeature;
use Illuminate\Http\Request;

class ServiceFeatureController extends Controller
{
     public function index()
    {
        $features = ServiceFeature::all();
        return view('service_feature.index', compact('features'));
    }

    public function create()
    {
        return view('service_feature.form');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => 'nullable|string|max:255',
            'sub_title' => 'nullable|string|max:255',
            'icon' => 'nullable|string|max:255',
        ]);

        ServiceFeature::create($data);
        return redirect()->route('service-features.index')->with('success', 'Service feature created successfully.');
    }

    public function edit(ServiceFeature $feature)
    {
        return view('service_feature.form', ['feature' => $feature]);
    }

    public function update(Request $request, ServiceFeature $feature)
    {
        $data = $request->validate([
            'title' => 'nullable|string|max:255',
            'sub_title' => 'nullable|string|max:255',
            'icon' => 'nullable|string|max:255',
        ]);

        $feature->update($data);
        return redirect()->route('service-features.index')->with('success', 'Service feature updated successfully.');
    }

    public function delete(ServiceFeature $feature)
    {
        $feature->delete();
        return redirect()->route('service-features.index')->with('success', 'Service feature deleted.');
    }
}
