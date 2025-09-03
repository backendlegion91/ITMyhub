<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function index()
    {
        $experiences = Experience::latest()->get();
        return view('admin.experience.index', compact('experiences'));
    }

    public function create()
    {
        return view('admin.experience.create');
    }

 public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'company' => 'required|string|max:255',
        'location' => 'nullable|string|max:255',
        'from' => 'required|string|max:255', // changed from 'date' if you're using string like "Jan 2022"
        'to' => 'nullable|string|max:255',   // same as above
        'highlights' => 'nullable|string',   // now string, not array
    ]);

    $highlights = array_map('trim', explode(',', $request->highlights));

    Experience::create([
        'title' => $request->title,
        'company' => $request->company,
        'location' => $request->location,
        'from' => $request->from,
        'to' => $request->to,
        'highlights' => $highlights,
    ]);

    return redirect()->route('admin.experience.index')->with('success', 'Experience added.');
}



    public function edit(Experience $experience)
    {
        return view('admin.experience.edit', compact('experience'));
    }
public function update(Request $request, $id)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'company' => 'required|string|max:255',
        'location' => 'nullable|string|max:255',
        'from' => 'nullable|string|max:255',
        'to' => 'nullable|string|max:255',
        'highlights' => 'nullable|string', // input is comma-separated string
    ]);

    $experience = Experience::findOrFail($id);

    $experience->title = $request->input('title');
    $experience->company = $request->input('company');
    $experience->location = $request->input('location');
    $experience->from = $request->input('from');
    $experience->to = $request->input('to');

    // Convert comma-separated highlights string to array
    $highlights = $request->input('highlights');
    $experience->highlights = $highlights
        ? array_map('trim', explode(',', $highlights))
        : [];

    $experience->save();

    return redirect()->route('admin.experience.index')->with('success', 'Experience updated successfully.');
}



    public function destroy(Experience $experience)
    {
        $experience->delete();
        return back()->with('success', 'Experience deleted.');
    }
}
