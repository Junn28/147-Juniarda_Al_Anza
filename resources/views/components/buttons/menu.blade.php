@props(['title' => '', 'route' => ''])
<a href="{{ $route }}"
    {{ $attributes->class(['active' => request()->segment(1) === $route || request()->segment(2) === $route]) }}>
    <button class="flex flex-col items-center">
        {{ $slot }}
        <span class="btm-nav-label">{{ $title }}</span>
    </button>
</a>
