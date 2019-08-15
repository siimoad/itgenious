<?php

namespace App\Http\Controllers;

use App\User;
use App\Formation;
use Illuminate\Http\Request;

class FormationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formations = Formation::all();
        return view('Admin.formation', compact('formations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.ajouterFormation');
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
            'description' => 'required',
            'theme' => 'required',
            'formation_pdf' => 'required|file',
            'brochure_pdf' => 'required|file',
            
        ]);
        $formation = new Formation();
        $formation->titre = request('titre');
        $formation->description = request('description');
        $formation->infos = request('infos');
        $formation->theme = request('theme');
        if ($request->has('formation_pdf') || $request->has('brochure_pdf') ) {
            // Get image file
            $formation_pdf = $request->file('formation_pdf');
            $formation_pdf->store('formation_pdf');
            $path_formation_pdf = $formation_pdf->getClientOriginalName();

            $formation_pdf->storeAs('formation_pdf', $path_formation_pdf);
            $formation->formation_pdf = $path_formation_pdf;

            $brochure_pdf = $request->file('brochure_pdf');
            $brochure_pdf->store('brochure_pdf');
            $path_brochure_pdf = $brochure_pdf->getClientOriginalName();

            $formation_pdf->storeAs('brochure_pdf', $path_brochure_pdf);
            $formation->brochure_pdf = $path_brochure_pdf;
        }
        $formation->save();
        return back()->withStatus(__('Formation successfully added.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $formation = Formation::find($id);
        return view('Admin.modifierFormation', ['formation' => $formation, 'id' => $id]);    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('formations', compact('user'));
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
        $this->validate($request, [
            'titre' => 'required',
            'description' => 'required',
            'theme' => 'required',
            'formation_pdf' => 'required|file',
            'brochure_pdf' => 'required|file',

        ]);
        $formation = Formation::find($id);

        $formation->titre = $request->input('titre');
        $formation->description = $request->input('description');
        $formation->infos = $request->input('infos');
        $formation->theme = $request->input('theme');
        if ($request->has('formation_pdf') || $request->has('brochure_pdf')) {
            // Get image file
            $formation_pdf = $request->file('formation_pdf');
            $formation_pdf->store('formation_pdf');
            $path_formation_pdf = $formation_pdf->getClientOriginalName();

            $formation_pdf->storeAs('formation_pdf', $path_formation_pdf);
            $formation->formation_pdf = $path_formation_pdf;

            $brochure_pdf = $request->file('brochure_pdf');
            $brochure_pdf->store('brochure_pdf');
            $path_brochure_pdf = $brochure_pdf->getClientOriginalName();

            $formation_pdf->storeAs('brochure_pdf', $path_brochure_pdf);
            $formation->brochure_pdf = $path_brochure_pdf;
        }
        $formation->save();
        return back()->withStatus(__('Formation successfully updated.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $annonce = Formation::where('id', '=', $id)->first();
        $annonce->delete();
        return back()->withStatus(__('Formation successfully deleted.'));

    }
    
}
