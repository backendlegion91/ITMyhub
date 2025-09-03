<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Hero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HeroController extends Controller
{

  public function dashboard(){
    return view('admin.dashboard');
  }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $hero = Hero::first();
        return view('admin.hero.index', compact('hero'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.hero.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'initials' => 'required|string|max:10',
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'resume' => 'nullable|mimes:pdf|max:2048',
        ]);

        $hero = new Hero();
        $hero->initials = $validated['initials'];
        $hero->name = $validated['name'];
        $hero->title = $validated['title'];

        if ($request->hasFile('resume')) {
            $hero->resume_path = $request->file('resume')->store('resumes', 'public');
        }

        $hero->save();

        return redirect()->route('admin.dashboard')->with('success', 'Hero section created successfully.');
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
   public function edit($id)
    {
        $hero = Hero::findOrFail($id);
        return view('admin.hero.edit', compact('hero'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $hero = Hero::findOrFail($id);

        $validated = $request->validate([
            'initials' => 'required|string|max:10',
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'resume' => 'nullable|mimes:pdf|max:2048',
        ]);

        $hero->initials = $validated['initials'];
        $hero->name = $validated['name'];
        $hero->title = $validated['title'];

        if ($request->hasFile('resume')) {
            // Delete old resume if exists
            if ($hero->resume_path) {
                Storage::disk('public')->delete($hero->resume_path);
            }
            $hero->resume_path = $request->file('resume')->store('resumes', 'public');
        }

        $hero->save();

        return redirect()->route('admin.dashboard')->with('success', 'Hero section updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
