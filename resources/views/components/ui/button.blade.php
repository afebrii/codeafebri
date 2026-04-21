@props(['variant' => 'primary', 'size' => 'md', 'type' => 'button'])

@php
    $baseClass = 'btn';
    
    $variantClass = match($variant) {
        'primary' => 'btn-primary',
        'outline' => 'btn-outline',
        'ghost' => 'btn-ghost',
        'danger' => 'bg-danger text-white hover:bg-red-600',
        default => 'btn-primary',
    };

    $sizeClass = match($size) {
        'sm' => 'btn-sm',
        'lg' => 'btn-lg',
        default => '',
    };
@endphp

<button type="{{ $type }}" {{ $attributes->merge(['class' => "$baseClass $variantClass $sizeClass"]) }}>
    {{ $slot }}
</button>
