@extends('layouts.app')

@section('title')
    Home Page
@endsection

@section('content')
<h1>Home Page</h1>
@endsection

@section('aside')
    @parent
    <p>Testo con il "parent"</p>
@endsection

