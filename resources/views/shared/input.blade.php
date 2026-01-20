@php
$name ??= '';
$label ??= ucfirst($name);
$type ??= 'text';
$value ??= null;
$class ??= null;
@endphp

<div @class([$class])>
    <label for="{{ $name }}" class="block text-sm/6 font-medium text-white">{{ $label }}</label>
    @if($type === 'textarea')
        <div class="mt-2">
            <textarea id="{{ $name }}" name="{{ $name }}" rows="4" class="block w-full rounded-md bg-white/5 px-3 py-1.5 text-base text-white outline-1 -outline-offset-1 outline-white/10 placeholder:text-gray-500 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-500 sm:text-sm/6">{{ old($name, $value) }}</textarea>
        </div>
    @else
        <div class="mt-2">
            <input
                type="{{ $type }}"
                id="{{ $name }}"
                name="{{ $name }}"
                value="{{ old($name, $value) }}"
                @error($name)
                aria-invalid="true"
                aria-describedby="{{ $name }}-error"
                @enderror
                @class([
                    'col-start-1 row-start-1 block w-full rounded-md bg-white/5 py-1.5 pr-10 pl-3 outline-1 -outline-offset-1 focus:outline-2 focus:-outline-offset-2 sm:pr-9 sm:text-sm/6',
                    'text-red-400 outline-red-500/50 placeholder:text-red-400/70 focus:outline-red-400' => $errors->has($name),
                    'text-white outline-white/10 placeholder:text-gray-500 focus:outline-indigo-500' => !$errors->has($name),
                ])
            />
            @error($name)
            <svg viewBox="0 0 16 16" fill="currentColor" data-slot="icon" aria-hidden="true" class="pointer-events-none col-start-1 row-start-1 mr-3 size-5 self-center justify-self-end text-red-400 sm:size-4">
                <path d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14ZM8 4a.75.75 0 0 1 .75.75v3a.75.75 0 0 1-1.5 0v-3A.75.75 0 0 1 8 4Zm0 8a1 1 0 1 0 0-2 1 1 0 0 0 0 2Z" clip-rule="evenodd" fill-rule="evenodd" />
            </svg>
            @enderror
        </div>
    @endif
    @error($name)
        <p id="{{ $name }}-error" class="mt-2 text-sm text-red-400">{{ $message }}</p>
    @enderror
</div>
