@props(['name' => ''])
<button {{ $attributes }}>
    {{ $slot }}
    {{ $name }}
</button>
