@extends('layouts.app')

@section('content')

    <x-theme-toggle />

    <div class="
        min-h-screen flex items-center justify-center
        bg-gradient-to-br from-cyan-100 via-cyan-200 to-cyan-300 
        dark:from-neutral-950 dark:via-cyan-950 dark:to-cyan-900  
    ">
        <div class="bg-neutral-50 dark:bg-neutral-800 rounded-lg shadow-lg w-full max-w-md overflow-hidden">
            <div class="p-4">
            <livewire:task-list />
            </div>
            <div class="bg-neutral-200 dark:bg-neutral-800 p-4 border-t border-neutral-300 dark:border-neutral-700">
            <livewire:task-input />
            </div>
        </div>
    </div>

@endsection