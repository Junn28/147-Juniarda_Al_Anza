@props(['title' => ''])
<button {{ $attributes }}>
    {{ $slot }}
    <span class="btm-nav-label">{{ $title }}</span>
</button>
