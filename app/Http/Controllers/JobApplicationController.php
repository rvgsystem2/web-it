<?php

namespace App\Http\Controllers;

use App\Models\JobApplication;
use App\Models\JobListing;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class JobApplicationController extends Controller
{
    public function index()
    {
        $applications = JobApplication::with(['job', 'user'])->latest()->get();
        return view('applications.index', compact('applications'));
    }

    // Show form to create a new job application
    public function create()
    {
        $jobs = JobListing::all();
        $users = User::all();
        return view('applications.create', compact('jobs', 'users'));
    }

    // Store the new job application
    public function store(Request $request, $id)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'resume' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
            'cover_letter' => 'nullable|string',
        ]);

        $resumePath = null;
        if ($request->hasFile('resume')) {
            $resumePath = $request->file('resume')->store('resumes', 'public');
        }

        JobApplication::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'job_id' => $id,
            'user_id' => $request->user_id,
            'resume' => $resumePath,
            'cover_letter' => $request->cover_letter,
            'status' => 'applied',
        ]);

        return redirect('/')->with('success', 'Your Application submitted successfully.');
    }

    // Show single job application
    public function show($id)
    {
        $application = JobApplication::with(['job', 'user'])->findOrFail($id);
        return view('applications.show', compact('application'));
    }

    // Show form to edit existing application
    public function edit($id)
    {
        $application = JobApplication::findOrFail($id);
        $jobs = Job::all();
        $users = User::all();
        return view('job_applications.edit', compact('application', 'jobs', 'users'));
    }

    // Update an application
    public function update(Request $request, $id)
    {
        $application = JobApplication::findOrFail($id);

        $request->validate([
            'status' => 'in:applied,shortlisted,rejected,hired',
            'cover_letter' => 'nullable|string',
            'resume' => 'nullable|file|mimes:pdf,doc,docx|max:2048',
        ]);

        if ($request->hasFile('resume')) {
            if ($application->resume) {
                Storage::disk('public')->delete($application->resume);
            }
            $application->resume = $request->file('resume')->store('resumes', 'public');
        }

        $application->status = $request->status ?? $application->status;
        $application->cover_letter = $request->cover_letter ?? $application->cover_letter;
        $application->save();

        return redirect()->route('job-applications.index')->with('success', 'Application updated successfully.');
    }

    // Delete a job application
    public function destroy($id)
    {
        $application = JobApplication::findOrFail($id);
        if ($application->resume) {
            Storage::disk('public')->delete($application->resume);
        }
        $application->delete();

        return redirect()->route('job-applications.index')->with('success', 'Application deleted successfully.');
    }

    public function status(Request $request, JobApplication $application){
        $application->update(['status' => $request->status]);
        return back()->with('success', 'Status changed successfully');
    }
}
