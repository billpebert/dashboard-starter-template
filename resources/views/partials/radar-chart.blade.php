{{-- Radar Chart --}}
{{-- https://apexcharts.com/javascript-chart-demos/radar-charts/basic/ --}}
@component('components.card-chart-small')
    <div id="radarChart"></div>
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
                    name: 'Desktop',
                    data: [186, 305, 237, 273, 209, 204],
                }],
                chart: {
                    height: 200,
                    type: 'radar',
                    toolbar: {
                        show: false
                    }
                },
                plotOptions: {
                    radar: {
                        size: 70,
                    },
                },
                colors: ['hsl(var(--chart-1))'],
                fill: {
                    colors: ['#9333ea'],
                    opacity: 0.5,
                },
                stroke: {
                    width: 1
                },
                markers: {
                    size: 2,
                    hover: {
                        size: 4,
                    },
                    strokeColors: 'hsl(var(--chart-1))',
                },
                yaxis: {
                    stepSize: 80,
                    show: false,
                },
                xaxis: {
                    categories: ['January', 'February', 'March', 'April', 'May', 'June'],
                },
                tooltip: {
                    enabled: true,
                    theme: ''
                }
            };

            var chart = new ApexCharts(document.querySelector("#radarChart"), options);
            chart.render();

        });
    </script>
@endpush
