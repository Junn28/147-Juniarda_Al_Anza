@props([
    'text' => '',
    'action' => '',
])
<dialog id="my_modal" class="modal modal-bottom sm:modal-middle">
    <div class="modal-box">
        <form method="dialog">
            <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
        </form>
        <h3 class="font-bold text-lg">{{ $text }}</h3>
        <p class="py-2 text-sm">Press ESC key or click (x) button to close</p>
        <div class="modal-action">
            <form method="POST" class="w-full" action="{{ $action }}">
                @csrf
                {{ $slot }}
                <button class="btn btn-outline btn-success">Submit</button>
            </form>
        </div>
    </div>
</dialog>
