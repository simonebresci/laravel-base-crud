<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Beer;

class ControllerBeer extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beers = Beer::all();
        return view('beer.index',compact('beers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('beer.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //Prendi dati da request Http
        $data = $request->all();

        // Valida il dato
        $request->validate([
          'name' => 'required | max:255',
          'type' => 'required | max:40',
          'quantityL' => 'required | numeric',
          'price' => 'required | numeric',
          'description' => 'required | max:2048',
          'img_path' => 'required | max:2048'
        ]);

        // Crea nuovo oggetto birra
        $beer = new Beer();

        // Riempi i campi dell'oggetto - versione lunga
        // $beer->name = $data['name'];
        // $beer->type = $data['type'];
        // $beer->quantityL = $data['quantityL'];
        // $beer->price = $data['price'];
        // $beer->description = $data['description'];

        // Riempi i campi dell'oggetto - versione compatta
        $beer->fill($data); //Regole di fill descritte nel modello Beer

        // Salva nuovo oggetto in db
        $beer->save();

        // Redirect su nuova birra salvata
        $beerStored = Beer::orderBy('id','desc')->first();
        return redirect()->route('beer.show',$beerStored);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Beer $beer)
    {
        // echo "cerco la birra";
        // $beer = Beer::find($id);
        // echo "ciao";
        // dd($beer);
        return view('beer.show',compact('beer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Beer $beer)
    {
        return view('beer.edit', compact('beer'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Beer $beer)
    {
        $data = $request->all();
        $beer->update($data);

        return redirect()->route('beer.show',compact('beer'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Beer $beer)
    {
        $beer->delete();
        return redirect()->route('beer.index');
    }
}
