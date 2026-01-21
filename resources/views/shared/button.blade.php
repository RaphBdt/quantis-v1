<?php
$link ??= '#';
$text ??= null;
$type ??= null;
?>

@if($type === 'button')
    <button class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">{{ $text }}</button>
@else
    <a href="{{ $link }}" class="rounded-md bg-indigo-500 px-3 py-2 text-sm font-semibold text-white hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">{{ $text }}</a>
@endif
