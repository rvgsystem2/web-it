<?php

namespace App\Http\Controllers;

use App\Models\PrivacyPolicy;
use Illuminate\Http\Request;

class PrivacyPolicyController extends Controller
{
    public function index()
    {
        $policies = PrivacyPolicy::latest()->get();
        return view('privacy_policies.index', compact('policies'));
    }

    // Show create form
    public function create()
    {
        return view('privacy_policies.create');
    }

    // Store new policy
    public function store(Request $request)
    {
        $request->validate([
            'heading' => 'string|max:255',
            'content' => 'nullable|string',
        ]);

        PrivacyPolicy::create($request->only('heading', 'content'));

        return redirect()->route('privacy-policy.index')
            ->with('success', 'Privacy Policy created successfully.');
    }


    // Show edit form
    public function edit(PrivacyPolicy $policy)
    {
        return view('privacy_policies.create', compact('policy'));
    }

    // Update policy
    public function update(Request $request, PrivacyPolicy $policy)
    {
        $request->validate([
            'heading' => 'string|max:255',
            'content' => 'nullable|string',
        ]);

        $policy->update($request->only('heading', 'content'));

        return redirect()->route('privacy-policy.index')
            ->with('success', 'Privacy Policy updated successfully.');
    }

    // Delete policy
    public function delete(PrivacyPolicy $policy)
    {
        $policy->delete();

        return back()->with('success', 'Privacy Policy deleted successfully.');
    }
}
