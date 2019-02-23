<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $table = 'produit';

    protected $fillable = ['quantite','name_produit','categorie_id'];

    public function panier()
    {
        return $this->belongsToMany('App\Model\Panier','panier');
    }
    public function categorie()
    {
        return $this->hasOne('App\Model\Categorie','id','categorie_id');
    }
}
