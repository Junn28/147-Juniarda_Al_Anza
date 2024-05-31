@extends('layouts.app')

@section('title', 'Permission')

@section('content')
    @include('components/header')
    <x-main>
        <div class="flex flex-col h-[520px] overflow-x-auto">
            @if (session('success'))
                <x-alert class="alert alert-success mb-4" message="{{ session('success') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </x-alert>
            @endif

            @include('components/avatar')

            <form class="w-1/2 border border-black p-3 rounded-md self-center my-3" action="permission" method="POST">
                @csrf
                <p class="text-lg font-medium text-center">Permission Request Form</p>
                <div class="mb-3">
                    <label class="mb-3 block text-sm font-medium text-black">
                        Date
                    </label>
                    <div class="relative">
                        <input
                            class="form-datepicker w-full rounded border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal outline-none border-primary"
                            placeholder="mm/dd/yyyy" data-class="flatpickr-right" type="date" name="date" />
                    </div>
                </div>
                <div class="mb-3">
                    <label class="mb-3 block text-sm font-medium text-black dark:text-white">
                        Reason
                    </label>
                    <textarea name="reason" rows="3" placeholder="type here..."
                        class="w-full rounded-lg border-[1.5px] border-stroke bg-transparent px-5 py-3 font-normal text-black outline-none border-primary"></textarea>
                </div>
                <button class="btn btn-outline btn-success">Submit</button>
            </form>
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
