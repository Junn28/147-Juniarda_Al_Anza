@extends('layouts.app')

@section('title', 'Home')

@section('css', asset('styles/calender.css'))

@section('content')
    @include('components/header')
    <x-main>
        <h1>Welcome, User</h1>
        <div class="flex flex-col justify-center bg-slate-200 h-[520px]">
            <div class="click anim04c">
                <span>click!</span>
            </div>
            @include('components/calender')

            <div class="text-center">
                <x-buttons.cta class="btn bg-lime-500 text-white" name="In">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="#fff" viewBox="0 0 512 512"
                        stroke="currentColor">
                        <path
                            d="M217.9 105.9L340.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L217.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1L32 320c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM352 416l64 0c17.7 0 32-14.3 32-32l0-256c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32l64 0c53 0 96 43 96 96l0 256c0 53-43 96-96 96l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32z" />
                    </svg>
                </x-buttons.cta>
                <x-buttons.cta class="btn bg-rose-500 text-white" name="Out">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="#fff" viewBox="0 0 512 512"
                        stroke="currentColor">
                        <path
                            d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z" />
                    </svg>
                </x-buttons.cta>
            </div>
        </div>


        <div class="btm-nav absolute">
            <x-buttons.menu class="active" title="Home">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
            </x-buttons.menu>
            <x-buttons.menu title="Permission">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </x-buttons.menu>
        </div>
    </x-main>

    <script>
        document.addEventListener("DOMContentLoaded", function() {

            const monthNames = ["January", "February", "March", "April", "May", "June", "July", "August",
                "September", "October", "November", "December"
            ];
            const dayNames = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];

            const newDate = new Date();

            function updateClock() {
                const hours = newDate.getHours();
                const seconds = newDate.getSeconds();
                const minutes = newDate.getMinutes();

                const hourElement = document.querySelector(".hour");
                const minuteElement = document.querySelector(".minute");
                const secondElement = document.querySelector(".second");

                hourElement.innerHTML = (hours < 10 ? "0" : "") + hours;
                minuteElement.innerHTML = (minutes < 10 ? "0" : "") + minutes;
                secondElement.innerHTML = (seconds < 10 ? "0" : "") + seconds;

                const monthSpan1 = document.querySelector(".month span");
                const monthSpan2 = document.querySelector(".month2 span");
                const dateSpan1 = document.querySelector(".date span");
                const dateSpan2 = document.querySelector(".date2 span");
                const daySpan1 = document.querySelector(".day span");
                const daySpan2 = document.querySelector(".day2 span");
                const yearElement = document.querySelector(".year span");

                monthSpan1.textContent = monthNames[newDate.getMonth()];
                monthSpan2.textContent = monthNames[newDate.getMonth()];
                dateSpan1.textContent = newDate.getDate();
                dateSpan2.textContent = newDate.getDate();
                daySpan1.textContent = dayNames[newDate.getDay()];
                daySpan2.textContent = dayNames[newDate.getDay()];
                yearElement.innerHTML = newDate.getFullYear();
            }

            updateClock();
            setInterval(updateClock, 1000);
        });
    </script>
@endsection
