@props([
    'title' => 'Default title',
    'caption' => 'Default caption'
])

<div class="flex flex-col justify-between p-6 overflow-hidden border rounded-lg shadow-sm border-border bg-card text-card-foreground min-h-64">
    {{-- Chart Slot --}}
    {{ $slot }}

    <div class="flex flex-col items-center gap-2 text-sm text-center text-pretty">
        <p class="flex items-center gap-2 font-medium leading-none">
            {{ $title }}
        </p>
        <p class="leading-none text-muted-foreground">
            {{ $caption }}
        </p>
    </div>
</div>
