@extends('layout')

@section('title', $asset->exist ? 'Edit asset ' . $asset->name . ' for scenario ' . $scenario->name : 'New asset for scenario ' . $scenario->name)

@section('content')
    <form action="{{ route($asset->exist ? 'assets.update' : 'assets.store', [$scenario, $asset]) }}" method="post">
        @csrf
        @method($asset->exist ? 'put' : 'post')
        <input type="hidden" name="scenario_id" value="{{ $scenario->id }}">

        <div class="flex flex-col sm:flex-row gap-4">
            @include('shared.input', ['name' => 'name', 'class' => 'mb-8 sm:w-1/3', 'value' => $asset->name])
            @include('shared.select', [
                'name' => 'type',
                'label' => 'Type of asset class',
                'class' => 'mb-8 sm:w-1/3',
                'options' => \App\Enums\AssetType::options(),
                'selected' => $asset->type?->value,
            ])
            @include('shared.input', ['name' => 'net_worth', 'label' => 'Net worth', 'type' => '', 'class' => 'sm:w-1/3 mb-8'])
        </div>

        <div class="flex flex-col sm:flex-row gap-4">
            @include('shared.input', ['name' => 'yield', 'label' => 'Yield (%)', 'class' => 'sm:w-1/3 mb-8', 'value' => $asset->yield])
            @include('shared.input', ['name' => 'monthly_investment', 'label' => 'Monthly investment', 'class' => 'sm:w-1/3 mb-8', 'value' => $asset->monthly_investment])
            @include('shared.input', ['name' => 'dividends', 'label' => 'Dividends or monthly income (optional)', 'class' => 'sm:w-1/3 mb-8', 'value' => $asset->dividends])
        </div>

        <div>
            @if($asset->exists)
                @include('shared.button', ['text' => 'Edit', 'type' => 'button'])
            @else
                @include('shared.button', ['text' => 'Create', 'type' => 'button'])
            @endif
        </div>
    </form>
@endsection
