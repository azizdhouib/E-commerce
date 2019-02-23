@extends('layouts.app')

@section('content')
    <html class="html1">
    <head>
        <title>Admin</title>

    </head>
    <body>

    <div id="container4">


        <h1>Ajouter Produit</h1>

        <form class="form4" action="{{action('AdminController@store')}}" method="POST">
            {{ csrf_field() }}
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>
            <label for="prix">Prix:</label>
            <input type="text" id="prix" name="prix" required>
            <label for="image">Image:</label>
            <input type="text" id="image" name="image" required>
            <label for="quantite">Stock:</label>
            <input type="number" id="quantite" name="quantite" required>
            <label for="description">Description:</label>
            <input type="text" id="descriprion" name="description" required>
            <label for="categorie">Categorie:</label>
            <input type="number" id="categorie" name="categorie" required>
            <div id="lower">
                <button type="submit">Create</button>
            </div>
        </form>

    </div>

    </body>
    </html>

@endsection