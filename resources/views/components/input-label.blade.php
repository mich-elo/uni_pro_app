@props(['value'])

<label {{ $attributes->merge(['class' => 'pl-4 peer-focus:pl-0 relative text-gray-600 cursor-text peer-focus:text-xs peer-focus:text-gray-300 transition-all']) }}>
    {{ $value ?? $slot }}
</label>
