@props([
    'color' => 'primary',
    'text' => ''
])

<span class="badge bg-{{ $color }}">{{ $text }}</span>
