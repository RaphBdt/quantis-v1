@extends('layout')

@section('title', $scenario->exists ? 'Edit a scenario' : 'Create a scenario')

@section('content')
    <form action="{{ route($scenario->exists ? 'scenarios.update' : 'scenarios.store', $scenario) }}" method="post">
        @csrf
        @method($scenario->exists ? 'put' : 'post')

        @include('shared.input', ['name' => 'name', 'class' => 'mb-8'])
        @include('shared.input', ['name' => 'description', 'class' => 'mb-8'])

        <div class="flex flex-col sm:flex-row gap-4">
            @include('shared.input', ['name' => 'start_year', 'label' => 'Start year of the simulation', 'class' => 'mb-8 sm:w-1/3'])
            @include('shared.input', ['name' => 'end_year', 'label' => 'End year of the simulation', 'class' => 'mb-8 sm:w-1/3'])
        </div>

        @include('shared.checkbox', ['name' => 'favorite', 'label' => 'Add to favorite?', 'class' => 'mb-8'])

        <div>
            @if($scenario->exists)
                @include('shared.button', ['text' => 'Edit', 'type' => 'button'])
            @else
                @include('shared.button', ['text' => 'Create', 'type' => 'button'])
            @endif
        </div>
    </form>
@endsection
