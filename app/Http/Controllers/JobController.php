<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\JobListing;
use Illuminate\Http\Request;

class JobController extends Controller
{
    public function index()
    {
        $jobs = JobListing::with('category')->latest()->get();
        return view('job_listings.index', compact('jobs'));
    }

    // Show the form for creating a new job listing
    public function create()
    {
        $categories = Category::all();
        return view('job_listings.create', compact('categories'));
    }

    // Store a newly created job listing in storage
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'location' => 'required|string|max:255',
            'salary_range' => 'nullable',

            'job_type' => 'required|in:full-time,part-time,internship',
            'category_id' => 'nullable|exists:categories,id',
            'deadline' => 'required|date|after:today',
        ]);

        JobListing::create($request->all());

        return redirect()->route('job.index')->with('success', 'Job listing created successfully.');
    }


    // Show the form for editing the specified job listing
    public function edit(JobListing $job)
    {
        $categories = Category::all();
        return view('job_listings.create', compact('job', 'categories'));
    }

    // Update the specified job listing in storage
    public function update(Request $request, JobListing $job)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'location' => 'required|string|max:255',
            'salary_min' => 'required|integer|min:0',
            'salary_max' => 'required|integer|gte:salary_min',
            'job_type' => 'required|in:full-time,part-time,internship',
            'category_id' => 'nullable|exists:categories,id',
            'deadline' => 'required|date|after:today',
        ]);

        $job->update($request->all());

        return redirect()->route('job.index')->with('success', 'Job listing updated successfully.');
    }

    // Remove the specified job listing from storage
    public function delete(JobListing $job)
    {
        $job->delete();

        return back()->with('success', 'Job listing deleted successfully.');
    }
}
