@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="text-center">
                    <a class="btn btn-primary" href="/create" style="margin-bottom: 20px;">Ajouter un contact</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nom du contact</th>
                        <th scope="col">Téléphone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($contacts as $contacts)
                    <tr>
                        <td>{{$contacts->id}}</td>
                        <td>{{$contacts->name}}</td>
                        <td>{{$contacts->tel}}</td>
                        <td>{{$contacts->email}}</td>
                        <td>
                            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editModal">Modifier</button>
                            <!-- Modal : Edit -->
                            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Modification : <b>{{$contacts->name}}</b></h5>
                                            <button type="button" class="close" data-dismiss="modal">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{route('contacts.edit')}}" method="post">
                                                {{csrf_field()}}
                                                <div class="form-group">
                                                    <label>Prénom & Nom</label>
                                                    <input type="text" class="form-control" value="{{$contacts->name}}" name="name" minlength="1" maxlength="128" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Numéro de téléphone</label>
                                                    <input type="text" class="form-control" value="{{$contacts->tel}}" name="tel" minlength="1" maxlength="128" required>
                                                </div>
                                                <div class="form-group">
                                                    <label>Adresse email</label>
                                                    <input type="email" class="form-control" value="{{$contacts->email}}" name="email" minlength="1" maxlength="128" required>
                                                </div>
                                                <div class="text-center">          
                                                    <button class="btn btn-warning btn-lg" type="submit">Modifier</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <a class="btn btn-danger"
                               onclick="document.getElementById('delete-form-{{$contacts->id}}').submit()">Supprimer</a>
                            <form id="delete-form-{{$contacts->id}}">
                                <!-- TODO Form pour la suppression d'un contact -->
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td>Vous n'avez pas encore de contact</td>
                    </tr>
                    @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
