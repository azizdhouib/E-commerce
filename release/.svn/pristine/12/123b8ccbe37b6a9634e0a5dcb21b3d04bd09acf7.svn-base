<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Panier extends Model
{
    protected $table = 'panier';

    public function user()
    {
        return $this->hasOne('App\User');
    }
    public function produit()
    {
        return $this->hasMany('App\Model\Produit','id','produit_id');
    }
}
