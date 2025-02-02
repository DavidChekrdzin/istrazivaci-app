<?php

namespace App\Http\Controllers;

use App\Models\Scientist;
use App\Http\Requests\StoreScientistRequest;
use App\Http\Requests\UpdateScientistRequest;

class ScientistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $scientists = Scientist::orderBy('created_at')->paginate(10);

        return view('scientists.index', ['scientists' => $scientists]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('scientists.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreScientistRequest $request)
    {
        $validated = $request->validate([
            'name'=>'required|string|max:100',
            'age'=>'required|integer|min:18|max:100',
        ]);

        Scientist::create($validated);

        return redirect()->route('scientist.index')->with('success','Scientist Created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Scientist $scientist)
    {
        return view('scientists.show',['scientist'=>$scientist]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Scientist $scientist)
    {
        return view('scientists.edit', ['scientist'=>$scientist]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateScientistRequest $request, Scientist $scientist)
    {
        $validated = $request->validate([
            'name'=>'required|string|max:100',
            'age'=>'required|integer|min:18|max:100',
        ]);

        $scientist->update($validated);

        return redirect()->route('scientist.index')->with('success','Scientist Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Scientist $scientist)
    {
        $scientist->delete();

        return redirect()->route('scientist.index')->with('success','Scientist Deleted!');
    }
}
