<?php

namespace App\Http\Controllers;

use App\Model\Produit;
use Illuminate\Http\Request;

class CatalogueController extends Controller
{
   public function catalogue(Request $request)
   {
       $produits = new Produit();
       $all_produits = $produits::all();

    return view('catalogue')->withProduits($all_produits);
   }
}
