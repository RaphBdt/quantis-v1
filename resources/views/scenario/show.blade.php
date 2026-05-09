@extends('layout')

@section('title', $scenario->name)

@section('header-action')
    @include('shared.button', ['link' => route('scenarios.edit', ['scenario' => $scenario]), 'text' => 'Edit'])
@endsection

@section('content')
    <div class="my-8">
        <p class="text-center text-white">No assets added for this scenario.</p>
    </div>
@endsection
