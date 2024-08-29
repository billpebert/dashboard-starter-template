{{-- Multiple Radial Chart --}}
{{-- https://apexcharts.com/javascript-chart-demos/radialbar-charts/multiple-radialbars/ --}}
@component('components.card-chart-small')
    <div id="chartMultipleRadial"></div>
    @slot('title')
        Trending up by 5.2% this month
        <img src="{{ asset('assets/svgs/chart-up.svg') }}" class="size-4 dark:invert" alt="">
    @endslot
    @slot('caption', 'Total visitors in the last 6 months')
@endcomponent

@push('js')
    <script type="module">
        document.addEventListener('DOMContentLoaded', function() {
            let dataCount = [90, 173, 187, 200, 275];
            let percentageDataCount = [];

            for (let i = 0; i < dataCount.length; i++) {
                percentageDataCount.push(percentageData(dataCount[i]));
            }

            function percentageData(num) {
                const highestCount = Math.max(...dataCount);
                return Math.floor(num / highestCount * 100)
            }

            var options = {
                series: percentageDataCount,
                chart: {
                    height: 250,
                    type: 'radialBar',
                },
                plotOptions: {
                    radialBar: {
                        startAngle: -120,
                        endAngle: -120 + 360,
                        dataLabels: {
                            show: false,
                        },
                        track: {
                            background: 'hsl(var(--muted))',
                            strokeWidth: '98%',
                            margin: 3, // margin is in pixels
                        },
                        hollow: {
                            margin: 1,
                            size: '20px',
                        }
                    },
                },
                labels: ['Other', 'Edge', 'Firefox', 'Safari', 'Chrome'],
                colors: ['hsl(var(--chart-5))', 'hsl(var(--chart-4))', 'hsl(var(--chart-3))', 'hsl(var(--chart-2))', 'hsl(var(--chart-1))'],
                tooltip: {
                    enabled: true,
                    fillSeriesColor: false,
                    theme: '',
                    y: {
                        formatter: function(val, { seriesIndex, dataPointIndex }) {
                            return dataCount[seriesIndex]; // Use the value from the series data
                        },
                    }
                },
                dataLabels: {
                    enabled: true,
                },
                states: {
                    hover: {
                        filter: {
                            opacity: 0.7
                        }
                    }
                },
            };

            var chart = new ApexCharts(document.querySelector("#chartMultipleRadial"), options);
            chart.render();

        });
    </script>
@endpush
