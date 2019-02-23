<?php

namespace App\Http\Controllers;

use App\Model\Command;
use App\Model\Panier;
use App\Model\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProduitController extends Controller
{
    public function produit($id)
    {
        $produit = DB::select("SELECT * from produit where id = '$id'");
        return view('produit', ['produit' => $produit]);
    }
    public function stock(Request $request)
    {
        $produits = new Produit();
        $produit = $produits->find($request->get('id'));
        $produit->quantite = $request->get('stock');
        $produit->save();
        $id = $request->get('id');
        /*$produit = DB::select("SELECT * from produit where id = '$id'");
        return view('produit', ['produit' => $produit]);
        */
        return back();

    }
    public function add(Request $request)
    {
        if(Auth::user()){
        $id = Auth::user()->id;
        $panier = new Panier();
        $panier->user_id = Auth::user()->id;
        $panier->produit_id = $request->get('id');
        $panier->save();

        $panier = new Panier();
        $paniers = $panier::all()->where('user_id','=',$id);
        return view('cart')->withPaniers($paniers);
        }
        return view('auth.login');

    }
    public function cart()
    {
        $id = Auth::user()->id;
        $panier = new Panier();
        $paniers = $panier::all()->where('user_id','=',$id);
        return view('cart')->withPaniers($paniers);


    }
    public function delete(Request $request)
    {
        $id = $request->get('id');
        DB::table('panier')->where('id','=',$id)->delete();
        $id = Auth::user()->id;
        $panier = new Panier();
        $paniers = $panier::all()->where('user_id','=',$id);
        return view('cart')->withPaniers($paniers);


    }
    public function valider(Request $request)
    {
        if (DB::table('panier')->where('user_id','=',Auth::user()->id)->count()){
        $id = Auth::user()->id;
        $command = new Command();
        $panier = new Panier();
        $paniers = $panier::all()->where('user_id','=',$id);
        $total = 0;
        foreach ($paniers as $panier)
        {
            $total += $panier->produit[0]->prix;
        }
        $command->prix = $total;
        $command->user_id = $id;
        $command->save();
        DB::table('panier')->where('user_id','=', Auth::user()->id)->delete();
        }
        $id = Auth::user()->id;
        $panier = new Panier();
        $paniers = $panier::all()->where('user_id','=',$id);

        return view('cart')->withPaniers($paniers);

    }
}
