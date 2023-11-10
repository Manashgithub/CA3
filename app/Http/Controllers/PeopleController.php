<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Models\People;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): view
    {
        $Peoples = People::all();
        return view ('Peoples.index')->with('Peoples', $Peoples);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Peoples.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        People::create($input);
        return redirect('Peoples')->with('flash_message', 'People Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) : View
    {
        $Peoples = People::find($id);
        return view('peoples.show')->with('Peoples', $Peoples);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) : View
    {
        $Peoples = People::find($id);
        return view('peoples.edit')->with('Peoples', $Peoples);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $Peoples = People::find($id);
        $input = $request->all();
        $Peoples->update($input);
        return redirect('Peoples')->with('flash_message', 'People Edited!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        People::destroy($id);
        return redirect('Peoples')->with('flash_message', 'People Deleted!');
    }
}
