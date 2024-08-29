<div class="overflow-hidden border rounded-lg shadow-sm bg-card text-card-foreground">
    <div class="flex flex-col items-stretch p-0 space-y-0 border-b sm:flex-row">
        <div class="flex flex-col justify-center flex-1 gap-1 px-6 py-5 sm:py-6">
            <h3 class="text-lg font-semibold leading-none tracking-tight">Bar Chart - Interactive</h3>
            <p class="text-sm text-muted-foreground">Showing total visitors for the last 3 months</p>
        </div>
        <div class="flex" aria-label="Tabs" role="tablist">
            <button
                class="relative z-30 flex flex-col justify-center flex-1 gap-1 px-6 py-4 text-left border-t active even:border-l hs-tab-active:bg-muted/50 sm:border-l sm:border-t-0 sm:px-8 sm:py-6"
                data-hs-tab="#desktopDataChart" role="tab">
                <span class="text-xs text-muted-foreground">
                    Desktop
                </span>
                <span class="text-lg font-bold leading-none sm:text-3xl">
                    24,828
                </span>
            </button>
            <button
                class="relative z-30 flex flex-col justify-center flex-1 gap-1 px-6 py-4 text-left border-t even:border-l hs-tab-active:bg-muted/50 sm:border-l sm:border-t-0 sm:px-8 sm:py-6"
                data-hs-tab="#mobileDataChart" role="tab">
                <span class="text-xs text-muted-foreground">
                    Mobile
                </span>
                <span class="text-lg font-bold leading-none sm:text-3xl">
                    25,010
                </span>
            </button>
        </div>
    </div>

    <div class="p-6 px-2 pt-0 sm:p-6">
        <div class="" role="tabpanel" id="desktopDataChart">
            <div id="desktopVisitorChart"></div>
        </div>
        <div class="hidden" role="tabpanel" id="mobileDataChart">
            <div id="mobileVisitorChart"></div>
        </div>
    </div>
</div>

@push('js')
    <script type="module">
        document.addEventListener('DOMContentLoaded', function() {
            let xaxisConfig = {
                tickAmount: 16,
                stepSize: 200,
                axisBorder: {
                    show: false
                },
                axisTicks: {
                    show: false
                },
                labels: {
                    rotate: 0,
                    trim: false,
                }
            }

            var options = {
                chart: {
                    height: 250,
                    type: 'bar',
                    toolbar: {
                        show: false,
                    },
                },
                plotOptions: {
                    bar: {
                        borderRadius: 0,
                        dataLabels: {
                            position: 'top', // top, center, bottom
                        },
                    }
                },
                dataLabels: {
                    enabled: false,
                },
                yaxis: {
                    stepSize: 200,
                    axisBorder: {
                        show: false
                    },
                    axisTicks: {
                        show: false,
                    },
                    labels: {
                        show: false,
                    },
                },
                grid: {
                    borderColor: '#f1f1f1',
                },
                tooltip: {
                    theme: '',
                    // x: {
                    //     show: false,
                    // },
                    y: {
                        title: {
                            formatter: (seriesName) => seriesName,
                        },
                    }
                }
            };

            // Desktop data
            var xaxisDesktop = {
                categories: [
                    "Apr 01", "Apr 02", "Apr 03", "Apr 04", "Apr 05", "Apr 06", "Apr 07", "Apr 08",
                    "Apr 09", "Apr 10",
                    "Apr 11", "Apr 12", "Apr 13", "Apr 14", "Apr 15", "Apr 16", "Apr 17", "Apr 18",
                    "Apr 19", "Apr 20",
                    "Apr 21", "Apr 22", "Apr 23", "Apr 24", "Apr 25", "Apr 26", "Apr 27", "Apr 28",
                    "Apr 29", "Apr 30",
                    "May 01", "May 02", "May 03", "May 04", "May 05", "May 06", "May 07", "May 08",
                    "May 09", "May 10",
                    "May 11", "May 12", "May 13", "May 14", "May 15", "May 16", "May 17", "May 18",
                    "May 19", "May 20",
                    "May 21", "May 22", "May 23", "May 24", "May 25", "May 26", "May 27", "May 28",
                    "May 29", "May 30",
                    "May 31", "Jun 01", "Jun 02", "Jun 03", "Jun 04", "Jun 05", "Jun 06", "Jun 07",
                    "Jun 08", "Jun 09",
                    "Jun 10", "Jun 11", "Jun 12", "Jun 13", "Jun 14", "Jun 15", "Jun 16", "Jun 17",
                    "Jun 18", "Jun 19",
                    "Jun 20", "Jun 21", "Jun 22", "Jun 23", "Jun 24", "Jun 25", "Jun 26", "Jun 27",
                    "Jun 28", "Jun 29",
                    "Jun 30"
                ],
            }

            var optionsDesktop = {
                ...options,
                series: [{
                    name: 'Page Views',
                    data: [
                        271, 392, 148, 350, 123, 475, 287, 92, 313, 464,
                        397, 86, 226, 354, 192, 419, 239, 57, 316, 455,
                        279, 66, 378, 451, 217, 72, 302, 483, 127, 431,
                        335, 89, 452, 256, 378, 492, 175, 60, 428, 138,
                        303, 346, 488, 256, 109, 370, 201, 59, 294, 461,
                        320, 163, 275, 382, 156, 487, 238, 405, 149, 488,
                        198, 76, 253, 441, 166, 483, 212, 343, 158, 492,
                        301, 437, 250, 67, 419, 239, 63, 320, 448, 223,
                        411, 147, 353, 73, 475, 318, 129, 497, 168, 352,
                        274
                    ],
                }],
                colors: ['hsl(var(--chart-1))'],
                xaxis: {
                    ...xaxisConfig,
                    ...xaxisDesktop,
                }
            }

            var chartDesktop = new ApexCharts(document.querySelector("#desktopVisitorChart"), optionsDesktop);
            chartDesktop.render();

            // Mobile data
            var xaxisMobile = {
                categories: [
                    "Apr 01", "Apr 02", "Apr 03", "Apr 04", "Apr 05", "Apr 06", "Apr 07", "Apr 08",
                    "Apr 09", "Apr 10",
                    "Apr 11", "Apr 12", "Apr 13", "Apr 14", "Apr 15", "Apr 16", "Apr 17", "Apr 18",
                    "Apr 19", "Apr 20",
                    "Apr 21", "Apr 22", "Apr 23", "Apr 24", "Apr 25", "Apr 26", "Apr 27", "Apr 28",
                    "Apr 29", "Apr 30",
                    "May 01", "May 02", "May 03", "May 04", "May 05", "May 06", "May 07", "May 08",
                    "May 09", "May 10",
                    "May 11", "May 12", "May 13", "May 14", "May 15", "May 16", "May 17", "May 18",
                    "May 19", "May 20",
                    "May 21", "May 22", "May 23", "May 24", "May 25", "May 26", "May 27", "May 28",
                    "May 29", "May 30",
                    "May 31", "Jun 01", "Jun 02", "Jun 03", "Jun 04", "Jun 05", "Jun 06", "Jun 07",
                    "Jun 08", "Jun 09",
                    "Jun 10", "Jun 11", "Jun 12", "Jun 13", "Jun 14", "Jun 15", "Jun 16", "Jun 17",
                    "Jun 18", "Jun 19",
                    "Jun 20", "Jun 21", "Jun 22", "Jun 23", "Jun 24", "Jun 25", "Jun 26", "Jun 27",
                    "Jun 28", "Jun 29",
                    "Jun 30"
                ],
            }

            var optionsMobile = {
                ...options,
                series: [{
                    name: 'Page Views',
                    data: [
                        135, 448, 295, 198, 423, 309, 78, 385, 169, 470,
                        296, 430, 128, 359, 486, 210, 145, 487, 351, 237,
                        401, 186, 499, 279, 342, 85, 255, 373, 410, 160,
                        472, 310, 252, 71, 416, 328, 104, 211, 385, 75,
                        469, 182, 384, 61, 436, 321, 190, 59, 477, 342,
                        204, 390, 112, 355, 131, 498, 281, 95, 311, 73,
                        480, 227, 436, 143, 264, 356, 273, 469, 154, 361,
                        68, 453, 170, 218, 465, 286, 406, 61, 279, 411,
                        249, 489, 327, 169, 454, 104, 298, 364, 275, 470,
                        284
                    ],
                }],
                colors: ['hsl(var(--chart-2))'],
                xaxis: {
                    ...xaxisConfig,
                    ...xaxisMobile,
                }
            }
            var chartMobile = new ApexCharts(document.querySelector("#mobileVisitorChart"), optionsMobile);
            chartMobile.render();
        });
    </script>
@endpush
