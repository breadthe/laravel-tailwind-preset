{{-- Responsive label/input group --}}
<div
    {{ $attributes->merge([
        'class' => 'flex flex-col justify-center items-center mb-4 mt-2 sm:flex-row sm:justify-start'
    ]) }}
>
    {{ $slot }}
</div>
