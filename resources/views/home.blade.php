@extends('layouts.app')

@section('content')
    <div class="container">

        @forelse($contact as $contact)
            <p>L'utilisateur {{$contact->name}} a {{$contact->contacts->count()}} contact(s).</p>
        @empty
            <p>Il n'y a pas encore d'utilisateurs</p>
        @endforelse
    </div>
@endsection