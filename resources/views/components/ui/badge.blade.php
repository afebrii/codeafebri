@props(['type' => 'info'])

@php
    $typeClass = match($type) {
        'primary' => 'badge-primary',
        'success' => 'badge-success',
        'danger' => 'badge-danger',
        'warning' => 'badge-warning',
        'info' => 'badge-info',
        default => 'badge-info',
    };
@endphp

<span {{ $attributes->merge(['class' => "badge $typeClass"]) }}>
    {{ $slot }}
</span>
