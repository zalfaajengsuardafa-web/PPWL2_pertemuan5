@extends('layouts.app')

@section('title', 'Halaman About')

@section('content')
    <h2>{{ $name }}</h2>
    <p>{{ $email }}</p>
@endsection