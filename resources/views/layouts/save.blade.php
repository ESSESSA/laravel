@extends('layouts.template')
@section('titre')
Page Acceuil
@endsection


@section('contenue')
Votre nom est: {{$request->nom}}
<br>
Votre prenom est: {{$request->prenom}}
<br>
Votre mail est: {{$request->mail}}
<br>
Votre tel est: {{$request->tel}}
@endsection
