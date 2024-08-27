{{-- Spline Line Area --}}
{{-- https://apexcharts.com/javascript-chart-demos/area-charts/spline/ --}}
@component('components.card-chart-small')
    <div class="flex flex-col gap-1.5">
        <h3 class="text-lg font-semibold leading-none tracking-tight">Line Chart - Multiple</h3>
        <p class="text-sm text-muted-foreground">January - June 2024</p>
    </div>
    @slot('title')
        Trending up by 5.2% this month
        <img src="{{ asset('assets/svgs/chart-up.svg') }}" class="size-4" alt="">
    @endslot
    @slot('caption', 'January - June 2024')
@endcomponent
