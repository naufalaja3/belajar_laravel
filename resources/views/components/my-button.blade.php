@props([
    'variant' => 'primary',
    'label' => 'Tombol',
    'href' => null,
    'type' => 'button'
])

@if($href)
    <a href="{{ $href }}" class="btn btn-{{ $variant }}">{{ $label }}</a>
@else
    <button type="{{ $type }}" class="btn btn-{{ $variant }}">{{ $label }}</button>
@endif
