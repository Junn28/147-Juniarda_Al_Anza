@extends('layouts.app')

@section('title', 'Permission')

@section('content')
    @include('components/header')
    <x-main>
        <div
            class="h-[520px] mockup-window border bg-base-300 shadow-default dark:border-strokedark dark:bg-boxdark sm:px-7.5">
            <div class="overflow-x-auto bg-base-200 h-full p-2">
                @foreach ($permissions as $permission)
                    <div class="chat chat-start">
                        <div class="chat-header">
                            {{ $permission->user->name }}
                            <time class="text-xs opacity-50">{{ $permission->date }}</time>
                        </div>
                        <div class="chat-bubble">{{ $permission->reason }}</div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="btm-nav absolute">
            <x-buttons.menu title="Home" route="home">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
            </x-buttons.menu>
            <x-buttons.menu title="Permission" route="permission">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </x-buttons.menu>
        </div>
    </x-main>
@endsection
