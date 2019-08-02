<?php

namespace App\Http\Controllers;
use App\Annonce;
use App\Formation;
use Illuminate\Http\Request;

class AnnoncesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $annonces = Annonce::all();
        return view('Admin.annonce', compact('annonces'));
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $annonces = Annonce::all();
        $formations = Formation::all();
        return view('Admin.ajouterAnnonce')->with(compact('annonces'))->with(compact('formations'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required',
            'prix' => 'required',
            'annonce_photo' => 'required',

        ]);
        $annonce = new Annonce();
        $annonce->formation_id = request('titre');
        $annonce->prix = request('prix');
        $annonce->annonce_photo = request('annonce_photo');

        $annonce->save();
        return back()->withStatus(__('Annonce successfully added.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
