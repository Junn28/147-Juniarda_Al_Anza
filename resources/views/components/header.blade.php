<header class="py-3">
    <div class="container mx-auto navbar bg-slate-300 rounded-full shadow-lg">
        <div class="flex-1">
            <a class="badge p-5 font-bold text-xl">AbsenKuy<span class="text-red-600">!</span></a>
        </div>
        <div class="flex-none gap-2">

            <div class="dropdown dropdown-end">
                <div tabindex="0" role="button" class="btn btn-circle">
                    <div class="w-10 rounded-full">
                        <svg class="w-10 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                            <path
                                d="M8 256a56 56 0 1 1 112 0A56 56 0 1 1 8 256zm160 0a56 56 0 1 1 112 0 56 56 0 1 1 -112 0zm216-56a56 56 0 1 1 0 112 56 56 0 1 1 0-112z" />
                        </svg>
                    </div>
                </div>
                <ul tabindex="0"
                    class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
                    <li><a>Profile</a></li>
                    <li><a href="{{ route('logout') }}">Logout</a></li>
                </ul>
            </div>
        </div>
    </div>
</header>
