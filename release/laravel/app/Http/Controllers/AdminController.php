<?php

namespace App\Http\Controllers;

use App\Model\Produit;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Request $request)
    {

        $produit = new Produit();
        $produit->name_produit = $request->get('name');
        $produit->quantite = $request->get('quantite');
        $produit->description = $request->get('description');
        $produit->prix = $request->get('prix');
        $produit->categorie_id = $request->get('categorie');
        $produit->image = $request->get('image');
        $produit->save();
        return redirect()->action('CatalogueController@catalogue');
    }
    public function admin(Request $request)
    {
        return view('admin');
    }
}
