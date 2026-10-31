@extends('layout')

@section('title', $scenario->exists ? 'Edit a scenario' : 'Create a scenario')

@section('content')
    <form action="{{ route($scenario->exists ? 'scenarios.update' : 'scenarios.store', $scenario) }}" method="post">
        @csrf
        @method($scenario->exists ? 'put' : 'post')

        @include('shared.input', ['name' => 'name', 'class' => 'mb-8', 'value' => $scenario->name])
        @include('shared.input', ['name' => 'description', 'class' => 'mb-8', 'value' => $scenario->description])

        <div class="flex flex-col sm:flex-row gap-4">
            @php
                $currentYear = date('Y');
                $yearOptions = [];
                foreach (range($currentYear - 100, $currentYear + 100) as $year) {
                    $yearOptions[$year] = $year;
                }
            @endphp
            @include('shared.select', [
                'name' => 'start_year',
                'label' => 'Start year of the simulation',
                'class' => 'mb-8 sm:w-1/3',
                'options' => $yearOptions,
                'selected' => $scenario->start_year,
            ])
            @include('shared.select', [
                'name' => 'end_year',
                'label' => 'End year of the simulation',
                'class' => 'mb-8 sm:w-1/3',
                'options' => $yearOptions,
                'selected' => $scenario->end_year,
            ])
        </div>

        @include('shared.checkbox', ['name' => 'favorite', 'label' => 'Add to favorite?', 'class' => 'mb-8', 'value' => $scenario->favorite])

        <div>
            @if($scenario->exists)
                @include('shared.button', ['text' => 'Edit', 'type' => 'button'])
            @else
                @include('shared.button', ['text' => 'Create', 'type' => 'button'])
            @endif
        </div>
    </form>
@endsection
