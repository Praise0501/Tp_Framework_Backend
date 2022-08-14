<?php

namespace App\Http\Controllers;
use App\Models\evenement;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class gestionnaire extends Controller
{
    public function home(){
        return view("formulaire");
    }
    public function sauvegarder(Request $request){
        dump($request->nom);
        $request->validate([
            'nom'=>"required",
            'date_demarrage'=>"required|date",
            'date_fin'=>"required|date",
            'description'=>"required",
        ]);
       
        evenement::create([
            "nom"=>$request->nom,
            "date_demarrage"=>date($request->date_demarrage),
            "date_fin"=>date($request->date_fin),
            "description"=>$request->description,

        ]);
        return redirect()->back();
    }

    public function affichage(){
        $evenements=new evenement();
        $evenements=$evenements->all();
        return view("affichage",compact("evenements"));

    }
}
