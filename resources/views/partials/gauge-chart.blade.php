{{-- Gauge Chart --}}
{{-- https://apexcharts.com/javascript-chart-demos/radialbar-charts/semi-circle-gauge/ --}}
@component('components.card-chart-small')
    <div id="chartCircularGauge"></div>
    @slot('title')
        Trending up by 5.2% this month
        <img src="{{ asset('assets/svgs/chart-up.svg') }}" class="size-4" alt="">
    @endslot
    @slot('caption', 'January - June 2024')
@endcomponent

@push('js')
    <script type="module">
        document.addEventListener('DOMContentLoaded', function() {
            let totalData = 1260;
            let formattedData = totalData.toLocaleString();
            var options = {
                series: [570, 1260],
                chart: {
                    type: 'donut',
                    height: 400,
                    width: 250
                },
                plotOptions: {
                    pie: {
                        startAngle: -90,
                        endAngle: 90,
                        donut: {
                            labels: {
                                show: false,
                            },
                        },
                    },
                },
                labels: ['Mobile', 'Desktop'],
                legend: {
                    show: false,
                },
                dataLabels: {
                    enabled: false,
                },
                colors: ['#bf83fc', '#9333ea'],
                tooltip: {
                    enabled: true,
                    fillSeriesColor: false,
                    theme: 'light',
                },
                title: {
                    text: formattedData,
                    align: 'center',
                    margin: 0,
                    offsetX: 0,
                    offsetY: 100,
                    floating: false,
                    style: {
                        fontSize: '24px',
                        fontWeight: 700,
                        fontFamily: 'Inter, sans-serif',
                        color: '#0a0a0a'
                    },
                },
                subtitle: {
                    text: 'Visitors',
                    align: 'center',
                    margin: 0,
                    offsetX: 0,
                    offsetY: 130,
                    floating: false,
                    style: {
                        fontSize: '12px',
                        fontWeight: 'normal',
                        fontFamily: 'Inter, sans-serif',
                        color: '#9699a2'
                    },
                }
            };

            var chart = new ApexCharts(document.querySelector("#chartCircularGauge"), options);
            chart.render();
        });
    </script>
@endpush
