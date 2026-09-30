@extends('layout')

@section('title', $scenario->name)

@section('header-action')
    @include('shared.button', ['link' => route('scenarios.edit', ['scenario' => $scenario]), 'text' => 'Edit'])
@endsection

@section('content')
    <p class="text-white"> {{ $scenario->description }}</p>
    <div class="my-8">
        @if ($scenario->assets->isEmpty())
            <p class="text-center text-white">No assets added for this scenario.</p>
            <div class="flex justify-center my-4">
                @include('shared.button', ['link' => route('assets.create', ['scenario' => $scenario]), 'text' => 'Add an asset'])
            </div>
        @else
            <div class="mt-8 flow-root">
                <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                        <table class="relative min-w-full divide-y divide-white/15">
                            <thead>
                                <tr>
                                    <th scope="col" class="px-2 py-3.5 text-left text-sm font-semibold whitespace-nowrap text-white">Asset name</th>
                                    <th scope="col" class="px-2 py-3.5 text-left text-sm font-semibold whitespace-nowrap text-white">Category</th>
                                    <th scope="col" class="px-2 py-3.5 text-left text-sm font-semibold whitespace-nowrap text-white">Net worth</th>
                                    <th scope="col" class="px-2 py-3.5 text-left text-sm font-semibold whitespace-nowrap text-white">Yield</th>
                                    <th scope="col" class="px-2 py-3.5 text-left text-sm font-semibold whitespace-nowrap text-white">Montly investment</th>
                                    <th scope="col" class="px-2 py-3.5 text-left text-sm font-semibold whitespace-nowrap text-white">Dividends</th>
                                    <th scope="col" class="py-3.5 pr-4 pl-3 whitespace-nowrap sm:pr-0">
                                        <span class="sr-only">Edit</span>
                                    </th>
                                    <th scope="col" class="py-3.5 pr-4 pl-3 whitespace-nowrap sm:pr-0">
                                        <span class="sr-only">Delete</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-white/10 bg-gray-900">
                                @foreach ($assets as $asset)
                                    <tr>
                                        <td class="px-2 py-2 text-sm font-medium whitespace-nowrap text-white">{{ $asset->name }}</td>
                                        <td class="px-2 py-2 text-sm whitespace-nowrap text-white">{{ \App\Enums\AssetType::from($asset->type)->label() }}</td>
                                        <td class="px-2 py-2 text-sm whitespace-nowrap text-gray-400">{{ number_format($asset->net_worth, 2, ',', ' ') }} €</td>
                                        <td class="px-2 py-2 text-sm whitespace-nowrap text-gray-400">{{ number_format($asset->yield, 2, ',', ' ') }} %</td>
                                        <td class="px-2 py-2 text-sm whitespace-nowrap text-gray-400">{{ number_format($asset->monthly_investment, 2, ',', ' ') }} €</td>
                                        <td class="px-2 py-2 text-sm whitespace-nowrap text-gray-400">@if(is_null($asset->dividends)) x @else {{ number_format($asset->dividends, 2, ',', ' ') }} €@endif</td>
                                        <td class="py-2 pr-4 pl-3 text-right text-sm font-medium whitespace-nowrap sm:pr-0">
                                            <a href="#" class="text-indigo-400 hover:text-indigo-300">Edit</a>
                                        </td>
                                        <td class="py-2 pr-4 pl-3 text-right text-sm font-medium whitespace-nowrap sm:pr-0">
                                            <a href="#" class="text-indigo-400 hover:text-indigo-300">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
