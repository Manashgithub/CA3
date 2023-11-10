<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Models\Donation;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): view
    {
        $Donations = Donation::all();
        return view ('Donations.index')->with('Donations', $Donations);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Donations.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $input = $request->all();
        Donation::create($input);
        return redirect('Donations')->with('flash_message', 'Donation Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) : View
    {
        $Donations = Donation::find($id);
        return view('Donations.show')->with('Donations', $Donations);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id) : View
    {
        $Donations = Donation::find($id);
        return view('Donations.edit')->with('Donations', $Donations);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $Donations = Donation::find($id);
        $input = $request->all();
        $Donations->update($input);
        return redirect('Donations')->with('flash_message', 'Donation Edited!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Donation::destroy($id);
        return redirect('Donations')->with('flash_message', 'Donation Deleted!');
    }
}
