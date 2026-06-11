@props([
    'title' => '',
    'footer' => ''
])

<div class="card h-100 shadow-sm">
    @if($title)
    <div class="card-header fw-bold">
        {{ $title }}
    </div>
    @endif
    <div class="card-body">
        {{ $slot }}
    </div>
    @if($footer)
    <div class="card-footer text-muted small">
        {{ $footer }}
    </div>
    @endif
</div>
