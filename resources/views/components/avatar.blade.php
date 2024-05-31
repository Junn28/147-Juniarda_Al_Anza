<div class="flex justify-between rounded-md shadow-md py-3 px-5">
    <div class="flex gap-3">
        <div class="avatar placeholder">
            <div class="bg-neutral text-neutral-content rounded-full w-12">
                <span class="text-3xl">{{ substr($user->name, 0, 1) }}</span>
            </div>
        </div>
        <div>
            <p class="text-lg font-semibold">{{ $user->name }}</p>
            <p class="text-sm font-medium">{{ $user->role->name }}</p>
        </div>
    </div>

    <x-badge class="badge self-center p-4 font-bold text-lg capitalize" status="{{ $absent->status }}" />
</div>
