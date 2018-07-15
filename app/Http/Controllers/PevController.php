<?php

namespace App\Http\Controllers;

use App\Pev;
use Illuminate\Http\Request;

class PevController extends Controller
{
    protected $pevs;
    public function __construct(Pev $pev)
    {
        $this->pev = $pev;
    }

    public function map()
    {
        $pevs = Pev::get()->toArray();
        // $pevs = $pevs->map(function($item){
        //     $obj = new \stdClass;

        //     return $item;
        // });
        // dd($pevs);
        
        return view('pev.map', compact("pevs"));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::User()->email !== "ga.richardi@gmail.com") abort(404);
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
        if(Auth::User()->email !== "ga.richardi@gmail.com") abort(404);
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
        $item = new Pev;
        $item->name = $request->name;
        // $item->cep = $request->cep;
        $item->endereco = $request->endereco;
        // $item->numero = $request->numero;
        // $item->dias = 1; //TODO: Verificar pq n esta aceitando array
        $item->email = $request->email;
        $item->telefone = $request->telefone;
        // $item->tiposResiduos = 2;  //TODO: Verificar pq n esta aceitando array
        $item->responsavel = $request->responsavel;
        $item->latLong = $request->latlng;
        // dd($item);

        $item->save();
        // $request->dias = "0, 2";
        // $request["tiposResiduos"] = [0,1];
        // dd($request->all());

        // $this->pev->create($request->all());
        return redirect(route("pevs.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pev  $pev
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Pev::find($id);
        return view('pev.show', compact('item'));
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
