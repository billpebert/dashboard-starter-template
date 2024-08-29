{{-- Spline Line Area --}}
{{-- https://apexcharts.com/javascript-chart-demos/area-charts/spline/ --}}
@component('components.card-chart-small')
    <div class="flex flex-col gap-1.5">
        <h3 class="text-lg font-semibold leading-none tracking-tight">Line Chart - Multiple</h3>
        <p class="text-sm text-muted-foreground">January - June 2024</p>

        <div id="chartSpline"></div>
    </div>
    @slot('title')
        Trending up by 5.2% this month
        <img src="{{ asset('assets/svgs/chart-up.svg') }}" class="size-4 dark:invert" alt="">
    @endslot
    @slot('caption', 'January - June 2024')
@endcomponent

@push('js')
    <script type="module">
        document.addEventListener('DOMContentLoaded', function() {
            var options = {
                series: [{
                        name: 'Mobile',
                        data: [80, 200, 120, 190, 130, 140]
                    },
                    {
                        name: 'Desktop',
                        data: [186, 305, 237, 73, 209, 214]
                    }
                ],
                colors: ['#bf83fc', '#9333ea'],
                fill: {
                    colors: ['transparent', 'transparent'],
                    type: 'solid',
                    opacity: 0.4
                },
                legend: {
                    show: false,
                },
                chart: {
                    height: 175,
                    type: 'area',
                    toolbar: {
                        show: false,
                    },
                    zoom: {
                        enabled: false,
                    },
                    stacked: false,
                    fontFamily: 'Inter, sans-serif'
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'smooth',
                    width: 2,
                },
                xaxis: {
                    categories: [
                        'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'
                    ],
                    axisTicks: {
                        show: false
                    },
                    stepSize: 100,
                },
                yaxis: {
                    show: false,
                    stepSize: 400,
                },
                tooltip: {
                    theme: '',
                },
            };

            var chart = new ApexCharts(document.querySelector("#chartSpline"), options);
            chart.render();
        });
    </script>
@endpush
