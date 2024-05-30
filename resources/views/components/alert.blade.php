@props(['message' => ''])
<div role="alert" {{ $attributes }}>
    {{ $slot }}
    <span>{{ $message }}</span>
</div>
