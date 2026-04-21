<div {{ $attributes->merge(['class' => 'card']) }}>
    @if(isset($header))
        <div class="px-6 py-4 border-b divider">
            {{ $header }}
        </div>
    @endif

    <div class="card-body">
        {{ $slot }}
    </div>

    @if(isset($footer))
        <div class="px-6 py-4 bg-dark-900 border-t divider">
            {{ $footer }}
        </div>
    @endif
</div>
