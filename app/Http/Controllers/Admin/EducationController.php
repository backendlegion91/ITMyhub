<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
  public function index() {
        $educations = Education::all();
        return view('admin.education.index', compact('educations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {
        return view('admin.education.create');
    }

    /**
     * Store a newly created resource in storage.
     */
     public function store(Request $request) {
        $request->validate([
            'title' => 'required',
            'institution' => 'required',
            'duration' => 'required',
            'type' => 'required',
            'highlights' => 'nullable|array',
            'border_color' => 'nullable|string',
        ]);

        Education::create($request->all());

        return redirect()->route('admin.education.index')->with('success', 'Education added.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
     public function edit(Education $education) {
        return view('admin.education.edit', compact('education'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Education $education) {
        $request->validate([
            'title' => 'required',
            'institution' => 'required',
            'duration' => 'required',
            'type' => 'required',
            'highlights' => 'nullable|array',
            'border_color' => 'nullable|string',
        ]);

        $education->update($request->all());

        return redirect()->route('admin.education.index')->with('success', 'Education updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
