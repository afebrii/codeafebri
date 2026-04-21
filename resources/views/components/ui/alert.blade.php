@props(['type' => 'info'])

@php
    $typeClass = match($type) {
        'success' => 'alert-success',
        'danger' => 'alert-danger',
        'warning' => 'alert-warning',
        'info' => 'alert-info',
        default => 'alert-info',
    };
@endphp

<div {{ $attributes->merge(['class' => "alert $typeClass"]) }} role="alert">
    {{ $slot }}
</div>
