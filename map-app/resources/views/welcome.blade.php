@extends('layout')
@section('title',"Home Page")
@section('content')
    @auth()
        @include('include.map')

    @endauth
@endsection
