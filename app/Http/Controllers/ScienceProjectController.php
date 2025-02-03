<?php

namespace App\Http\Controllers;

use App\Models\ScienceProject;
use App\Http\Requests\StoreScienceProjectRequest;
use App\Http\Requests\UpdateScienceProjectRequest;

class ScienceProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $scienceProjects = ScienceProject::with('scientists')->orderBy('created_at')->paginate(5);

        return view('scienceprojects.index', ['scienceProjects' => $scienceProjects]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('scienceprojects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreScienceProjectRequest $request)
    {
        $validated = $request->validate([
            'name'=>'required|string|max:100',
            'description'=>'required|string|max:1000',
        ]);

        ScienceProject::create($validated);

        return redirect()->route('scienceprojects.index')->with('success','Science Project Created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(ScienceProject $scienceProject)
    {
        $scienceProject->load('scientists');

        return view('scienceprojects.show',['scienceProject'=>$scienceProject]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ScienceProject $scienceProject)
    {
        return view('scienceprojects.edit', ['scienceProject'=>$scienceProject]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateScienceProjectRequest $request, ScienceProject $scienceProject)
    {
        $validated = $request->validate([
            'name'=>'required|string|max:100',
            'description'=>'required|string|max:1000',
        ]);

        $scienceProject->update($validated);

        return redirect()->route('scienceprojects.index')->with('success','Science Project Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ScienceProject $scienceProject)
    {
        $scienceProject->delete();

        return redirect()->route('scienceprojects.index')->with('success','Science Project Deleted!');
    }
}
