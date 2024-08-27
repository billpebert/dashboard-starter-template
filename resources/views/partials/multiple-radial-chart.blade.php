{{-- Multiple Radial Chart --}}
{{-- https://apexcharts.com/javascript-chart-demos/radialbar-charts/multiple-radialbars/ --}}
@component('components.card-chart-small')
    Test
    @slot('title')
        Trending up by 5.2% this month
        <img src="{{ asset('assets/svgs/chart-up.svg') }}" class="size-4" alt="">
    @endslot
    @slot('caption', 'Total visitors in the last 6 months')
@endcomponent
