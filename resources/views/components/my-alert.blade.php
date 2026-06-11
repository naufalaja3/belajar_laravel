@props([
    'type' => 'info',
    'message' => ''
])

<div class="alert alert-{{ $type }} alert-dismissible fade show" role="alert">
    @if($type === 'success') ✅
    @elseif($type === 'warning') ⚠️
    @elseif($type === 'danger') ❌
    @else ℹ️
    @endif
    {{ $message }}
    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
</div>
