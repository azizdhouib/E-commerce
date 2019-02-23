@extends('layouts.app')

@section('content')

    <div id="tab1">
        @foreach($produits as $produit)


                    <div id="tab">
                        <img src="{{$produit->image}}" class="logo1">
                    <br/>
                    <h3>Categorie : {{$produit->categorie->description_categorie}}</h3>

                    <h5>Name : {{$produit->name_produit}}</h5>

                    <h5>Price : {{$produit->prix}} €</h5>
                        <input type="submit" value="{{ \Illuminate\Support\Facades\DB::table('panier')->where([['user_id','=', Auth::user()->id],['produit_id','=',$produit->id]])->count() }}" style="float: right">
                    <div style="display: inline-block">
                            @if($produit->quantite >0)
                            <form action="{{ action('ProduitController@add') }}" method="get">
                                @csrf
                                <input value="{{$produit->id}}" name="id" hidden type="number">
                                <button type="submit">Acheter</button>
                        </form>
                            @else
                            <input type="submit" value="Acheter">
                        @endif
                        <form action="{{ route('produit',$produit->id)}}" method="GET">
                            @csrf

                            <button type="submit">Produit</button>
                        </form>
                    </div>
                    </div>

            @endforeach
    </div>

@endsection