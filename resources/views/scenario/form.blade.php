@extends('layout')

@section('title', $scenario->exists ? 'Edit a scenario' : 'Create a scenario')

@section('content')
    <form action="{{ route($scenario->exists ? 'scenarios.update' : 'scenarios.store', $scenario) }}">
        @csrf
        @method($scenario->exists ? 'put' : 'post')

        @include('shared.input', ['name' => 'name', 'class' => 'mb-8'])
        @include('shared.input', ['name' => 'description', 'class' => 'mb-8'])
        @include('shared.checkbox', ['name' => 'favorite', 'label' => 'Add to favorite?', 'class' => 'mb-8'])

        <div>
            @if($scenario->exists)
                @include('shared.button', ['link' => route('scenarios.create'), 'text' => 'Edit', 'type' => 'button'])
            @else
                @include('shared.button', ['link' => route('scenarios.create'), 'text' => 'Create', 'type' => 'button'])
            @endif
        </div>
    </form>
@endsection
