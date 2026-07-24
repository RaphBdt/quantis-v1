@php
    $name ??= '';
    $label ??= ucfirst($name);
    $options ??= [];
    $selected ??= null;
    $class ??= null;
    $id ??= $name;
@endphp

<div @class([$class])>
    <label for="{{ $id }}" class="block text-sm/6 font-medium text-white">{{ $label }}</label>
    <div class="mt-2 grid grid-cols-1 relative">
        <select 
            id="{{ $id }}" 
            name="{{ $name }}" 
            class="col-start-1 row-start-1 w-full appearance-none rounded-md bg-white/5 py-1.5 pr-8 pl-3 text-base text-white outline-1 -outline-offset-1 outline-white/10 *:bg-gray-800 focus-visible:outline-2 focus-visible:-outline-offset-2 focus-visible:outline-indigo-500 sm:text-sm/6"
        >
            @foreach($options as $value => $text)
                <option value="{{ $value }}" {{ $value == $selected ? 'selected' : '' }}>{{ $text }}</option>
            @endforeach
        </select>
        <svg viewBox="0 0 16 16" fill="currentColor" data-slot="icon" aria-hidden="true" class="pointer-events-none absolute right-2 top-1/2 -translate-y-1/2 size-5 text-gray-400 sm:size-4">
            <path d="M4.22 6.22a.75.75 0 0 1 1.06 0L8 8.94l2.72-2.72a.75.75 0 1 1 1.06 1.06l-3.25 3.25a.75.75 0 0 1-1.06 0L4.22 7.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" fill-rule="evenodd" />
        </svg>
    </div>

    @error($name)
        <p id="{{ $name }}-error" class="mt-2 text-sm text-red-400">{{ $message }}</p>
    @enderror
</div>
