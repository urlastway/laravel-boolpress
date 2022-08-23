@extends('layouts.app')

@section('title')
    Contact
@endsection

@section('content')

@if($errors->any())

    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

@endif

<h1>Contact Page</h1>
    <form action="{{ route('contacts-form') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Scrivi il tuo nome</label>
            <input type="text" name="name" placeholder="Nome" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="lastname">Scrivi il tuo cognome</label>
            <input type="text" name="lastname" placeholder="Cognome" id="lastname" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Scrivi il tuo email</label>
            <input type="text" name="namemaile" placeholder="Email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="massagge">Scrivi il tuo messaggio</label>
            <textarea type="text" name="massagge" placeholder="Messaggio" id="massagge" class="form-control"></textarea>
        </div>
        <input type="submit" class="btn btn-success mt-2">
    </form>
@endsection