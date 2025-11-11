@extends('layout')

@section('title', 'Scenarios')

@section('header-action')
    <a href="{{ route('scenarios.create') }}" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Add a scenario</a>
@endsection

@section('content')
    <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
        @foreach($scenarios as $scenario)
            <li class="col-span-1 flex flex-col divide-y divide-white/10 rounded-lg bg-gray-800/50 text-center outline -outline-offset-1 outline-white/10">
                <div class="flex flex-1 flex-col p-8">
                    <h3 class="mt-6 text-sm font-medium text-white">{{ $scenario->name }}</h3>
                    <dl class="mt-1 flex grow flex-col justify-between">
                        <dt class="sr-only">{{ $scenario->name }}</dt>
                        <dd class="text-sm text-gray-400">{{ Str::limit($scenario->description, 120) }}</dd>
                        <dt class="sr-only">Yield</dt>
                        <dd class="mt-3">
                            <span class="inline-flex items-center rounded-full bg-green-500/10 px-2 py-1 text-xs font-medium text-green-500 inset-ring inset-ring-green-500/10">+10,10 % / y</span>
                        </dd>
                    </dl>
                </div>
                <div>
                    <div class="-mt-px flex divide-x divide-white/10">
                        <div class="flex w-0 flex-1">
                            <a href="" class="relative -mr-px inline-flex w-0 flex-1 items-center justify-center gap-x-3 rounded-bl-lg border border-transparent py-4 text-sm font-semibold text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-gray-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                </svg>
                                Delete
                            </a>
                        </div>
                        <div class="-ml-px flex w-0 flex-1">
                            <a href="" class="relative inline-flex w-0 flex-1 items-center justify-center gap-x-3 rounded-br-lg border border-transparent py-4 text-sm font-semibold text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-gray-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25 21 12m0 0-3.75 3.75M21 12H3" />
                                </svg>
                                Go to
                            </a>
                        </div>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>

    {{ $scenarios->links() }}
@endsection
