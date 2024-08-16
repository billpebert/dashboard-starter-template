@extends('layouts.dashboard')

@section('content')
    <div class="flex items-center justify-between">
        <div class="grid gap-1">
            <h1 class="text-2xl font-semibold font-heading">Dashboard</h1>
            <p class="text-base text-muted-foreground">Current Role : USER — Change your role in
                settings.
            </p>
        </div>
    </div>
    <div
        class="flex items-center justify-center flex-1 p-8 text-center border border-dashed rounded-lg shadow-sm animate-in fade-in-50">
        <div class="flex max-w-[420px] flex-col items-center text-center">
            <div class="flex items-center justify-center rounded-full size-20 bg-muted">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-file-text size-10">
                    <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                    <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                    <path d="M10 9H8"></path>
                    <path d="M16 13H8"></path>
                    <path d="M16 17H8"></path>
                </svg>
            </div>
            <h3 class="mt-5 text-2xl font-bold font-heading">No content created</h3>
            <p class="mb-5 mt-1.5 text-center text-sm font-normal leading-6 text-muted-foreground">
                You
                don't have any content yet. Start creating content.</p>
            <button
                class="inline-flex items-center justify-center text-sm font-medium transition focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:opacity-50 disabled:cursor-not-allowed ring-offset-background select-none active:scale-[0.98] bg-primary text-primary-foreground hover:bg-primary/90 h-10 py-2 px-4 rounded-md">Add
                Content
            </button>
        </div>
    </div>
@endsection
