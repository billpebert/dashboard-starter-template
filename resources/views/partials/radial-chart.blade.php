{{-- Radial Chart --}}
{{-- https://apexcharts.com/javascript-chart-demos/radialbar-charts/basic/ --}}
@component('components.card-chart-small')
    <div id="radialChart"></div>
    @slot('title')
        Trending up by 5.2% this month
        <img src="{{ asset('assets/svgs/chart-up.svg') }}" class="size-4" alt="">
    @endslot
    @slot('caption', 'Total visitors in the last 6 months')
@endcomponent

@push('js')
    <script type="module">
        document.addEventListener('DOMContentLoaded', function() {
            var options = {
                series: [45], //series value in percentage from 0 - 100
                chart: {
                    height: 350,
                    type: 'radialBar',
                    fontFamily: 'Inter, sans-serif'
                },
                plotOptions: {
                    radialBar: {
                        startAngle: -30,
                        endAngle: -30+360,
                        hollow: {
                            margin: 0,
                            size: '70%',
                            background: '#fff',
                            position: 'back',
                        },
                        track: {
                            background: '#f5f5f5',
                            strokeWidth: '100',
                            margin: 0, // margin is in pixels
                        },
                        dataLabels: {
                            name: {
                                offsetY: 25,
                                show: true,
                                color: 'hsl(0 0% 45.1%)',
                                fontSize: '12px',
                                fontWeight: 400
                            },
                            value: {
                                formatter: function(val) {
                                    val = 1260
                                    return val.toLocaleString();
                                },
                                color: '#0a0a0a',
                                fontSize: '36px',
                                fontWeight: 700,
                                show: true,
                                offsetY: -8
                            }
                        }
                    }
                },
                fill: {
                    colors: '#bf83fc',
                },
                labels: ['Visitors'],
            };

            var chart = new ApexCharts(document.querySelector("#radialChart"), options);
            chart.render();
        });
    </script>
@endpush
