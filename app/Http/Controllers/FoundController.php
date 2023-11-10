<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Models\Found;

class FoundController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): view
    {
        $Founds = Found::all();
        return view ('Founds.index')->with('Founds', $Founds);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Founds.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Found::create($input);
        return redirect('Founds')->with('flash_message', 'Found Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) : View
    {
        $Founds = Found::find($id);
        return view('Founds.show')->with('Founds', $Founds);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) : View
    {
        $Founds = Found::find($id);
        return view('Founds.edit')->with('Founds', $Founds);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $Founds = Found::find($id);
        $input = $request->all();
        $Founds->update($input);
        return redirect('Founds')->with('flash_message', 'Found Edited!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Found::destroy($id);
        return redirect('Founds')->with('flash_message', 'Found Deleted!');
    }
}
