@extends('layout')

@section('title', $scenario->name)

@section('header-action')
    @include('shared.button', ['link' => route('scenarios.edit', ['scenario' => $scenario]), 'text' => 'Edit'])
@endsection

@section('content')
    <div class="my-8">
        @if (empty($scenario->assets))
            <p class="text-center text-white">No assets added for this scenario.</p>
            <div class="flex justify-center my-4">
                @include('shared.button', ['link' => route('assets.create', ['scenario' => $scenario]), 'text' => 'Add an asset'])
            </div>
        @else
            
        @endif
    </div>
@endsection
