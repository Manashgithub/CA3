<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Models\Inventory;

class InventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): view
    {
        $Inventorys = Inventory::all();
        return view ('Inventorys.index')->with('Inventorys', $Inventorys);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Inventorys.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Inventory::create($input);
        return redirect('Inventorys')->with('flash_message', 'Inventory Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) : View
    {
        $Inventorys = Inventory::find($id);
        return view('Inventorys.show')->with('Inventorys', $Inventorys);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) : View
    {
        $Inventorys = Inventory::find($id);
        return view('Inventorys.edit')->with('Inventorys', $Inventorys);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $Inventorys = Inventory::find($id);
        $input = $request->all();
        $Inventorys->update($input);
        return redirect('Inventorys')->with('flash_message', 'Inventory Edited!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Inventory::destroy($id);
        return redirect('Inventorys')->with('flash_message', 'Inventory Deleted!');
    }
}
