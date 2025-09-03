<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AboutSection;


class AboutSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $about = AboutSection::first();
         return view('admin.about.index', compact('about'));
    }

    /**
     * Show the form for creating a new resource.
     */
  public function create()
{
    return view('admin.about.create');
}

    /**
     * Store a newly created resource in storage.
     */
public function store(Request $request)
{
  $request->validate([
    'initials' => 'required',
    'name' => 'required',
    'title' => 'required',
    'experience' => 'required|integer',
    'bio' => 'required',
    'additional_info' => 'nullable|string',
    'skill' => 'required|array',
]);

  $data = $request->all();
$data['skills'] = json_encode($request->skill);

AboutSection::create($data);

    return redirect()->route('admin.about.index')->with('success', 'About section created.');
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
   public function edit(AboutSection $about)
{
    return view('admin.about.edit', compact('about'));
}

    /**
     * Update the specified resource in storage.
     */
 public function update(Request $request, AboutSection $about)
{
    $request->validate([
        'initials' => 'required',
        'name' => 'required',
        'title' => 'required',
        'experience' => 'required|integer',
        'bio' => 'required',
        'additional_info' => 'nullable|string',
        'skill' => 'required',
    ]);

    // Convert skill string to array
    $skills = is_array($request->skill)
        ? $request->skill
        : explode(',', $request->skill);

    $data = $request->except('skill');
    $data['skills'] = json_encode($skills);

    $about->update($data);

    return redirect()->route('admin.about.index')->with('success', 'About section updated.');
}



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
