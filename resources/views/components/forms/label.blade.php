<label
    for="{{ $for }}"
    {{ $attributes->merge([
        'class' =>
            'w-full px-0 sm:px-2 ' . // common styling
            ($inline
                ? 'mb-0 ml-2 sm:ml-0 sm:w-1/2' // inline styling
                : 'sm:w-1/3 flex justify-start sm:justify-end' // "standard" responsive label
            )
            . ($required ? ' font-bold' : '')
    ]) }}
>
    {{ $slot }}
</label>
