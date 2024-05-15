@props([
    'name' => 'AbsenKuy',
])

<header class="py-3">
    <div class="container mx-auto navbar bg-slate-300 rounded-full">
        <div class="flex-1">
            <a class="badge p-5 font-bold text-xl">{{ $name }}<span class="text-red-600">!</span></a>
        </div>
        <div class="flex-none gap-2">

            <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                    <div class="w-20 rounded-full">
                        <img alt="Tailwind CSS Navbar component" src="{{ asset('img/5.png') }}" />
                    </div>
                </div>
                <ul tabindex="0"
                    class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
                    <li>
                        <a class="justify-between">
                            Profile
                            <span class="badge">New</span>
                        </a>
                    </li>
                    <li><a>Settings</a></li>
                    <li><a>Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
