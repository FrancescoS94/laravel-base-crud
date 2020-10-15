@extends('layouts.app')
@section('content')
    <form action="{{route('clients.store')}}" method="post">
    @csrf
    @method('POST')
    <label for="title">Nome</label>
    <input type="text" name="name" placeholder="Nome" id="name" value="{{ old('name') }}">
    <label for="content">Cognome</label>
    <input type="text" name="lastname" placeholder="Cognome" id="lastname" value="{{ old('lastname') }}">
    <label for="content">Età</label>
    <input type="text" name="eta" placeholder="Età" id="eta" value="{{ old('eta') }}">
    <input type="submit" value="Invia">
    </form>
@endsection
