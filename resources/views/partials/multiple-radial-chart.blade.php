{{-- Multiple Radial Chart --}}
{{-- https://apexcharts.com/javascript-chart-demos/radialbar-charts/multiple-radialbars/ --}}
@component('components.card-chart-small')
    <div id="chartMultipleRadial"></div>
    @slot('title')
        Trending up by 5.2% this month
        <img src="{{ asset('assets/svgs/chart-up.svg') }}" class="size-4" alt="">
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
                            background: '#f5f5f5',
                            strokeWidth: '100',
                            margin: 3, // margin is in pixels
                        },
                        hollow: {
                            margin: 1,
                            size: '20px',
                        }
                    },
                },
                labels: ['Other', 'Edge', 'Firefox', 'Safari', 'Chrome'],
                colors: ['#ead6ff', '#d8b4fe', '#a655f7', '#bf83fc', '#9333ea'],
                tooltip: {
                    enabled: true,
                    fillSeriesColor: false,
                    y: {
                        formatter: function(val, { seriesIndex, dataPointIndex }) {
                            return dataCount[seriesIndex]; // Use the value from the series data
                        },
                        title: {
                            formatter: (seriesName) => seriesName // Customize the tooltip title
                        }
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
                }
            };

            var chart = new ApexCharts(document.querySelector("#chartMultipleRadial"), options);
            chart.render();

        });
    </script>
@endpush
