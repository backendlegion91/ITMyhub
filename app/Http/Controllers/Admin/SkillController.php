<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Skill;


class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
  public function index()
{
    $skills = Skill::all();
    return view('admin.skills.index', compact('skills'));
}

    /**
     * Show the form for creating a new resource.
     */
  public function create()
{
    return view('admin.skills.create');
}

    /**
     * Store a newly created resource in storage.
     */
 public function store(Request $request)
{
    $request->validate([
        'category' => 'required',
        'name' => 'required|string|max:255',
        'icon' => 'nullable|string|max:255',
    ]);

    Skill::create($request->all());
    return redirect()->route('admin.skills.index')->with('success', 'Skill added!');
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
  public function edit(Skill $skill)
{
    return view('admin.skills.edit', compact('skill'));
}

    /**
     * Update the specified resource in storage.
     */
 public function update(Request $request, Skill $skill)
{
    $request->validate([
        'category' => 'required',
        'name' => 'required|string|max:255',
        'icon' => 'nullable|string|max:255',
    ]);

    $skill->update($request->all());
    return redirect()->route('admin.skills.index')->with('success', 'Skill updated!');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
