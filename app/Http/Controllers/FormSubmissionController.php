<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FormSubmission;
use App\Models\Image;

class FormSubmissionController extends Controller
{
    public function create()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'type' => 'required|string|in:land,appartment,house,rent', 
            'message' => 'required',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $formSubmission = FormSubmission::create($validated);

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('images', 'public');
                Image::create([
                    'form_submission_id' => $formSubmission->id,
                    'path' => $path
                ]);
            }
        }

        return redirect('form')->with('success', 'Form submitted successfully!');
    }

    public function home(Request $request)
    {
        $sort_by = $request->input('sort_by', 'id'); 
        $sort_order = $request->input('sort_order', 'asc');
    
        $submissions = FormSubmission::with('images')
            ->orderBy($sort_by, $sort_order)
            ->paginate(3);
    
        return view('home', compact('submissions', 'sort_by', 'sort_order'));
    }
}



