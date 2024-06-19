<?php

namespace App\Http\Controllers;

use App\Models\UnlistedItem;
use Illuminate\Http\Request;

class UnlistedItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('unlisted.create');
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
    public function show(UnlistedItem $unlistedItem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UnlistedItem $unlistedItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, UnlistedItem $unlistedItem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UnlistedItem $unlistedItem)
    {
        //
    }
}
