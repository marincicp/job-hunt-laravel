@php
    $defaultClasses =
        'bg-white/5 p-4 rounded-xl border-transparent border  hover:border-blue-600 group transition duration-200';
@endphp

<div {{ $attributes(['class' => $defaultClasses]) }}>

    {{ $slot }}
</div>
