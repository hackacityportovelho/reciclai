<?php

namespace App\Http\Controllers;

use App\Pev;
use Illuminate\Http\Request;

class PevController extends Controller
{
    protected $pevs;
    public function __construct(Pev $pevs)
    {
        $this->pevs = $pevs;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pevs = Pev::all();
        return view('pev.index', compact("pevs"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pev.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pev  $pev
     * @return \Illuminate\Http\Response
     */
    public function show(Pev $pev)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pev  $pev
     * @return \Illuminate\Http\Response
     */
    public function edit(Pev $pev)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pev  $pev
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pev $pev)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pev  $pev
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pev $pev)
    {
        //
    }
}
