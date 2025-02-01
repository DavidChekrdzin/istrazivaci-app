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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreScientistRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Scientist $scientist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Scientist $scientist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateScientistRequest $request, Scientist $scientist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Scientist $scientist)
    {
        //
    }
}
