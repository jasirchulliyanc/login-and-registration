@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">
        @auth
        <h1>Dashboard</h1>
        <p class="lead">Welcome</p>
        @endauth

        @guest
        <h1>Homepage</h1>
      
        @endguest
    </div>
@endsection