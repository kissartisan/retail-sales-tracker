<?php

namespace App\Http\Controllers;

use App\Models\Barangay;
use Illuminate\Http\Request;
use App\Http\Requests\BarangayRequest;

class BarangayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangays = Barangay::paginate(10);

        return view('barangays.index', compact('barangays'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barangay = new Barangay;

        return view('barangays.create', compact('barangay'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BarangayRequest $request)
    {
        Barangay::create($request->validated());

        return redirect(route('barangays.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Barangay  $barangay
     * @return \Illuminate\Http\Response
     */
    public function show(Barangay $barangay)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Barangay  $barangay
     * @return \Illuminate\Http\Response
     */
    public function edit(Barangay $barangay)
    {
        return view('barangays.edit', compact('barangay'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Barangay  $barangay
     * @return \Illuminate\Http\Response
     */
    public function update(BarangayRequest $request, Barangay $barangay)
    {
        $barangay->update($request->validated());

        return redirect(route('barangays.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Barangay  $barangay
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barangay $barangay)
    {
        $barangay->delete();

        return redirect(route('barangays.index'));
    }
}
