<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $partner = Partner::query()->where('user_id', Auth::user()->id)->first();
        $clients = Client::query()->where('partner_id', $partner->id)->get();
        return Inertia::render('Clients/Index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Clients/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        //
    }
}
