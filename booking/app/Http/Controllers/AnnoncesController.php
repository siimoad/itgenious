<?php

namespace App\Http\Controllers;
use App\Annonce;
use App\Formation;
use Illuminate\Http\Request;
use Storage;
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
    public function indexHome()
    {
        $annonces = Annonce::with('formation')->get();;
        return view('welcome')->with(compact('annonces', $annonces));
    }
    public function microsoftHome()
    {
        $annonces = Annonce::join('formations', function ($join) {
            $join->on('annonces.formation_id', '=', 'formations.id')
                ->where('formations.theme', '=', 'microsoft');
        })->get();
        return view('Guest.microsoft')->with(compact('annonces', $annonces));
    }
    
    public function adobeHome()
    {
        $annonces = Annonce::join('formations', function ($join) {
            $join->on('annonces.formation_id', '=', 'formations.id')
                ->where('formations.theme', '=', 'adobe');
        })->get();
        return view('Guest.adobe')->with(compact('annonces', $annonces));
    }
    
    public function officeHome()
    {
        $annonces = Annonce::join('formations', function ($join) {
            $join->on('annonces.formation_id', '=', 'formations.id')
                ->where('formations.theme', '=', 'office');
        })->get();
        return view('Guest.office')->with(compact('annonces', $annonces));
    }

    public function comptiaHome()
    {
        $annonces = Annonce::join('formations', function ($join) {
            $join->on('annonces.formation_id', '=', 'formations.id')
                ->where('formations.theme', '=', 'comptia');
        })->get();
        return view('Guest.comptia')->with(compact('annonces', $annonces));
    }

    public function pearsonvueHome()
    {
        $annonces = Annonce::join('formations', function ($join) {
            $join->on('annonces.formation_id', '=', 'formations.id')
                ->where('formations.theme', '=', 'pearson_vue');
        })->get();
        return view('Guest.pearsonvue')->with(compact('annonces', $annonces));
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
        if ($request->has('annonce_photo')) {
            // Get image file
            $annonce_photo = $request->file('annonce_photo');
            $annonce_photo->store('annonce_photo');
            $path_annonce_photo = $annonce_photo->getClientOriginalName();

            $annonce_photo->storeAs('annonce_photo', $path_annonce_photo);
            $annonce->annonce_photo = Storage::url($path_annonce_photo);
        }
        if ($request->has('annonce_photo2')) {
            // Get image file
            $annonce_photo2 = $request->file('annonce_photo2');
            $annonce_photo2->store('annonce_photo2');
            $path_annonce_photo2 = $annonce_photo2->getClientOriginalName();

            $annonce_photo2->storeAs('annonce_photo2', $path_annonce_photo2);
            $annonce->annonce_photo2 = Storage::url($path_annonce_photo2);
        }
       
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
        $annonce = Annonce::with('formation')->find($id);
        return view('Guest.details', compact('annonce'));

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
