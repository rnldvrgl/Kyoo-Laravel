@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' =>
        'w-full -ml-10 pl-12 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-kyoo-primary-500 focus:ring-kyoo-primary-500',
]) !!}>
