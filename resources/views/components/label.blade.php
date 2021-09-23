@props(['value'])

<label {{ $attributes->merge(['class' => 'text-danger']) }}>
    {{ $value ?? $slot }}
</label>
