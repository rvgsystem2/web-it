<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
     public function index()
    {
        $faqs = Faq::latest()->get();
        return view('faq.index', compact('faqs'));
    }

    public function create()
    {
        return view('faq.form');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'question' => 'nullable|string|max:255',
            'answer' => 'nullable|string',
            'status' => 'required|in:active,inactive',
        ]);

        Faq::create($data);
        return redirect()->route('faqs.index')->with('success', 'FAQ added successfully.');
    }

    public function edit(Faq $faq)
    {
        return view('faq.form', compact('faq'));
    }

    public function update(Request $request, Faq $faq)
    {
        $data = $request->validate([
            'question' => 'nullable|string|max:255',
            'answer' => 'nullable|string',
            'status' => 'required|in:active,inactive',
        ]);

        $faq->update($data);
        return redirect()->route('faqs.index')->with('success', 'FAQ updated successfully.');
    }

    public function delete(Faq $faq)
    {
        $faq->delete();
        return redirect()->route('faqs.index')->with('success', 'FAQ deleted successfully.');
    }
}
