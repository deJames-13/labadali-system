{{-- Side Bar Button --}}
@props(['active' => false, 'link' => 'dash'])
@php
    $activeBtn = $active ? 'text-primary text-xl font-bold hover:text-cbrown' : 'text-cbrown font-medium hover:font-bold hover:scale-105 transform transition-all';
    $btnClass = 'w-full btn btn-ghost flex justify-start items-center' . $activeBtn;
@endphp
<button onclick="window.location.href='/{{ $link }}'" class="{{ $btnClass }}">
    {{ $slot }}
</button>
