@extends('layout')

@section('title', $asset->exist ? 'Edit asset ' . $asset->name . ' for scenario ' . $scenario->name : 'New asset for scenario ' . $scenario->name)

@section('content')
    <form action="{{ route($asset->exist ? 'assets.update' : 'assets.store', [$scenario, $asset]) }}">
        <p class="text-center text-white">Asset form</p>
    </form>
@endsection
