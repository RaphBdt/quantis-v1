@extends('layout')

@section('title', $asset->exist ? 'Edit asset ' . $asset->name . ' for scenario ' . $scenario->name : 'New asset for scenario ' . $scenario->name)

@section('content')
    <p class="text-center text-white">Asset form</p>
@endsection
