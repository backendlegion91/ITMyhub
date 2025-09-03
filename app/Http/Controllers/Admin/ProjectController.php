<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projects = Project::latest()->get();
            return view('admin.project.index', compact('projects'));


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'tech_stack' => 'nullable|string',
        'image' => 'nullable|image|max:2048',
        'github_url' => 'nullable|url',
        'demo_url' => 'nullable|url',
    ]);

    $data = $request->only(['title', 'description', 'tech_stack', 'github_url', 'demo_url']);

    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')->store('projects', 'public');
    }

    Project::create($data);

    return redirect()->route('admin.project.index')->with('success', 'Project created successfully.');
}


    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
     public function edit(Project $project)
    {
        return view('admin.project.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $request->validate([
            'title'       => 'required|string|max:255',
            'description' => 'required|string',
            'tech_stack'  => 'nullable|string|max:255',
            'github_url'  => 'nullable|url',
            'demo_url'    => 'nullable|url',
            'image'       => 'nullable|image|max:2048',
        ]);

        $data = $request->only(['title', 'description', 'tech_stack', 'github_url', 'demo_url']);

        if ($request->hasFile('image')) {
            // Delete old image
            if ($project->image && Storage::disk('public')->exists($project->image)) {
                Storage::disk('public')->delete($project->image);
            }

            $data['image'] = $request->file('image')->store('projects', 'public');
        }

        $project->update($data);

        return redirect()->route('admin.project.index')->with('success', 'Project updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}
