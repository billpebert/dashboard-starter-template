{{-- Bar Chart --}}
{{-- https://apexcharts.com/javascript-chart-demos/bar-charts/basic/ --}}
@component('components.card-chart-small')
    <div id="horizontalBarChart"></div>
    @slot('title')
        Trending up by 5.2% this month
        <img src="{{ asset('assets/svgs/chart-up.svg') }}" class="size-4" alt="">
    @endslot
    @slot('caption', 'Results for the top 5 browsers')
@endcomponent

@push('js')
    <script type="module">
        document.addEventListener('DOMContentLoaded', function() {
            var options = {
                series: [{
                    name: 'Visitors',
                    data: [275, 200, 187, 173, 90]
                }],
                fill: {
                    colors: ['#9333ea', '#bf83fc', '#a655f7', '#d8b4fe', '#ead6ff'],
                },
                chart: {
                    type: 'bar',
                    height: 175,
                    toolbar: {
                        show: false,
                    },
                    fontFamily: 'Inter, sans-serif'
                },
                plotOptions: {
                    bar: {
                        borderRadius: 4,
                        horizontal: true,
                    }
                },
                dataLabels: {
                    enabled: false
                },
                xaxis: {
                    categories: ['Chrome', 'Safari', 'Firefox', 'Edge', 'Other'],
                    show: false,
                    axisBorder: {
                        show: false // Hides the x-axis line
                    },
                    axisTicks: {
                        show: false // Hides the ticks on the x-axis
                    },
                    labels: {
                        show: false // Hides the labels on the x-axis
                    }
                },
                yaxis: {
                    show: true,
                    axisBorder: {
                        show: false // Hides the x-axis line
                    },
                    axisTicks: {
                        show: false // Hides the ticks on the x-axis
                    },
                    labels: {
                        style: {
                            colors: '#838383'
                        }
                    }
                },
                grid: {
                    show: false
                }
            };

            var chart = new ApexCharts(document.querySelector("#horizontalBarChart"), options);
            chart.render();
        });
    </script>
@endpush
