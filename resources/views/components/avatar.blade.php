<div class="flex justify-between rounded-md shadow-md py-3 px-5">
    <div class="flex gap-3">
        <div class="avatar placeholder">
            <div class="bg-neutral text-neutral-content rounded-full w-24">
                <span class="text-3xl">{{ substr($user->name, 0, 1) }}</span>
            </div>
        </div>
        <div>
            <p class="text-lg font-semibold">{{ $user->name }}</p>
            <p class="text-sm font-medium">{{ $user->role->name }}</p>
        </div>
    </div>

    <div class="badge badge-neutral self-center p-4 font-bold text-lg">{{ $absent->status }}</div>
</div>
