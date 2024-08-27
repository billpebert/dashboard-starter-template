<div class="overflow-hidden border rounded-lg shadow-sm bg-card text-card-foreground">
    <div class="flex flex-col items-stretch p-0 space-y-0 border-b sm:flex-row">
        <div class="flex flex-col justify-center flex-1 gap-1 px-6 py-5 sm:py-6">
            <h3 class="text-lg font-semibold leading-none tracking-tight">Bar Chart - Interactive</h3>
            <p class="text-sm text-muted-foreground">Showing total visitors for the last 3 months</p>
        </div>
        <div class="flex" aria-label="Tabs" role="tablist">
            <button
                class="relative z-30 flex flex-col justify-center flex-1 gap-1 px-6 py-4 text-left border-t active even:border-l hs-tab-active:bg-muted/50 sm:border-l sm:border-t-0 sm:px-8 sm:py-6" data-hs-tab="#desktopDataChart" role="tab">
                <span class="text-xs text-muted-foreground">
                    Desktop
                </span>
                <span class="text-lg font-bold leading-none sm:text-3xl">
                    24,828
                </span>
            </button>
            <button
                class="relative z-30 flex flex-col justify-center flex-1 gap-1 px-6 py-4 text-left border-t even:border-l hs-tab-active:bg-muted/50 sm:border-l sm:border-t-0 sm:px-8 sm:py-6" data-hs-tab="#mobileDataChart" role="tab">
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
            Desktop
        </div>
        <div class="hidden" role="tabpanel" id="mobileDataChart">
            Mobile
        </div>
    </div>
</div>
