@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-3"></div>

            <div class="col-6">
                <h3>Modifier un contact</h3>
                <form action="{{route('contacts.edit')}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Prénom & Nom</label>
                        <input type="text" class="form-control" placeholder="" value="" name="name" minlength="1" maxlength="128" required>
                    </div>
                    <div class="form-group">
                        <label>Numéro de téléphone</label>
                        <input type="text" class="form-control" placeholder="" value="" name="tel" minlength="1" maxlength="128" required>
                    </div>
                    <div class="form-group">
                        <label>Adresse email</label>
                        <input type="email" class="form-control" placeholder="" value="" name="email" minlength="1" maxlength="128" required>
                    </div>
                    <div class="text-center">          
                        <button class="btn btn-warning btn-lg" type="submit">Modifier</button>
                    </div>
                </form>
            </div>

            <div class="col-3"></div>
    </div>
@endsection
