@php
    $accueil =true;
@endphp
@extends('template')
@section('content')
    <h4>Bienvenue {{session('user_prenom')}} {{session('user_nom')}} dans la plateforme de gestion des présences des employés de ISI</h4>
@endsection
