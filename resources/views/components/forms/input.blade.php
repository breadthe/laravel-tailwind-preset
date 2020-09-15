<input
    name="{{ $name }}"
    type="{{ $type }}"
    id="{{ $id }}"
    @if($value) value="{{ $value }}" @endif
    @if($required) required @endif
    @if($autofocus) autofocus @endif
    {{ ($type === 'checkbox' || $type === 'radio') && old($name) ? 'checked' : '' }}
    {{ $attributes->merge([
        'class' =>
            ($errors->first($name) ? 'border-2 border-red-500 ' : 'border ')
            . ($type === 'checkbox' || $type === 'radio' ? '' : 'w-full ')
            . 'block rounded-sm py-2 px-3 text-gray-700 leading-tight'
    ]) }}
/>
