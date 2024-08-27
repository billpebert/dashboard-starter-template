{{-- Radar Chart --}}
{{-- https://apexcharts.com/javascript-chart-demos/radar-charts/basic/ --}}
@component('components.card-chart-small')
    <div id="radarChart"></div>
    @slot('title')
        Trending up by 5.2% this month
        <img src="{{ asset('assets/svgs/chart-up.svg') }}" class="size-4" alt="">
    @endslot
    @slot('caption', 'January - June 2024')
@endcomponent


@push('js')
    <script type="module">
        document.addEventListener('DOMContentLoaded', function() {

            var options = {
                series: [{
                    name: 'Series 1',
                    data: [186, 305, 237, 273, 209, 204],
                }],
                chart: {
                    height: 200,
                    type: 'radar',
                    toolbar: {
                        show: false
                    }
                },
                colors: ['#9333ea'],
                stroke: {
                    width: 1
                },
                fill: {
                    opacity: 0.5
                },
                markers: {
                    size: 0,
                    hover: {
                        size: 5,
                    }
                },
                yaxis: {
                    stepSize: 80,
                    show: false,
                },
                xaxis: {
                    categories: ['January', 'February', 'March', 'April', 'May', 'June'],
                },
                grid: {
                    show: false
                }
            };

            var chart = new ApexCharts(document.querySelector("#radarChart"), options);
            chart.render();

        });
    </script>
@endpush
