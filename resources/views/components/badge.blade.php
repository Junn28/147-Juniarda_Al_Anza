@props(['status' => ''])
<div
    {{ $attributes->class([
        'bg-success bg-opacity-10 text-success' => $status == 'presence',
        'bg-error bg-opacity-10 text-error' => $status == 'absence',
        'bg-warning bg-opacity-10 text-warning' => $status == 'permission',
    ]) }}>
    {{ $status }}
</div>
