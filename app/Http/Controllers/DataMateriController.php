<?php

namespace App\Http\Controllers;

use App\Models\DataMateri;
use Illuminate\Http\Request;

class DataMateriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dataMateri = DataMateri::all();
        return view('data-materi.index', compact('dataMateri'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DataMateri $dataMateri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DataMateri $dataMateri)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DataMateri $dataMateri)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DataMateri $dataMateri)
    {
        //
    }
}
