{{-- Spline Line Area --}}
{{-- https://apexcharts.com/javascript-chart-demos/area-charts/spline/ --}}
@component('components.card-chart-small')
    <div id="chartSplineArea"></div>
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
                    colors: ['#bf83fc', '#9333ea'],
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
                    stacked: true,
                    fontFamily: 'Inter, sans-serif'
                },
                dataLabels: {
                    enabled: false
                },
                stroke: {
                    curve: 'smooth',
                    width: 1,
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

            var chart = new ApexCharts(document.querySelector("#chartSplineArea"), options);
            chart.render();
        });
    </script>
@endpush
