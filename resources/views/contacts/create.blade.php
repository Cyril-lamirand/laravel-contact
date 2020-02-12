@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-3"></div>

            <div class="col-6">
                <h3>Créer un contact</h3>
                <hr>
                <form action="{{route('contacts.create')}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Prénom & Nom</label>
                        <input type="text" class="form-control" placeholder="" name="name" minlength="1" maxlength="128" required>
                    </div>
                    <div class="form-group">
                        <label>Numéro de téléphone</label>
                        <input type="text" class="form-control" placeholder="" name="tel" minlength="1" maxlength="128" required>
                    </div>
                    <div class="form-group">
                        <label>Adresse email</label>
                        <input type="email" class="form-control" placeholder="" name="email" minlength="1" maxlength="128" required>
                    </div>                   
                    <div class="text-center">          
                        <button class="btn btn-primary btn-lg" type="submit">Enregistrer</button>
                    </div>
                </form>
                <hr>
                <div class="text-center">
                    <small><i>Laravel 5 Frameworks Php - Some cool text addon !</i></small>
                </div>
            </div>

            <div class="col-3"></div>

        </div>
    </div>
@endsection
