{{-- Search input --}}
<div class="flex-1 w-full">
    <button
        class="inline-flex items-center focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:opacity-50 disabled:cursor-not-allowed ring-offset-background select-none active:scale-[0.98] border border-input py-2 px-4 relative h-9 w-full justify-start rounded-md bg-muted/50 text-sm font-normal text-muted-foreground shadow-none sm:pr-12 md:w-72"
        data-hs-overlay="#modal-search-global">
        <span class="inline-flex">Search<span class="hidden sm:inline-flex">&nbsp;documentation</span>...</span><kbd
            class="pointer-events-none absolute right-[0.3rem] top-[0.45rem] hidden h-5 select-none items-center gap-1 rounded border bg-muted px-1.5 text-[10px] font-medium opacity-100 sm:flex">
            <span class="text-xs">⌘</span>K</kbd>
    </button>
</div>

@push('modal')
    <div id="modal-search-global"
        class="hs-overlay hs-overlay-backdrop-open:bg-background/80 dark:hs-overlay-backdrop-open:bg-background/80 backdrop-blur-sm hidden size-full fixed top-0 start-0 z-[180] overflow-x-hidden overflow-y-auto pointer-events-none"
        role="dialog" tabindex="-1" aria-labelledby="modal-search-global-label">
        <div
            class="hs-overlay-animation-target hs-overlay-open:scale-100 hs-overlay-open:opacity-100 scale-95 opacity-0 ease-in-out transition-all duration-200 sm:max-w-lg sm:w-full m-3 sm:mx-auto h-[calc(100%-2rem)] flex items-center">
            <div class="flex flex-col max-h-full overflow-hidden w-full border rounded-md pointer-events-auto bg-background shadow-2xl">
                <div class="relative flex items-center px-3 border-b">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="mr-2 opacity-50 lucide lucide-search size-5 shrink-0">
                        <circle cx="11" cy="11" r="8"></circle>
                        <path d="m21 21-4.3-4.3"></path>
                    </svg>
                    <input
                        class="flex w-full py-3 text-sm bg-transparent rounded-md outline-none placeholder:text-foreground-muted h-12 disabled:cursor-not-allowed disabled:opacity-50"
                        placeholder="Type a command or search..." autofocus type="text" id="global-search-dialog"
                        value="">
                    <button type="button"
                        class="absolute transition-opacity -translate-y-1/2 rounded-sm right-4 top-1/2 opacity-70 ring-offset-background hover:opacity-100 focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 disabled:pointer-events-none"
                        data-hs-overlay="#modal-search-global">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-x size-4">
                            <path d="M18 6 6 18"></path>
                            <path d="m6 6 12 12"></path>
                        </svg>
                        <span class="sr-only">Close</span>
                    </button>
                </div>
                <div class="max-h-[300px] h-full overflow-y-auto">
                    <div class="px-2 py-1 overflow-hidden text-foreground" role="presentation" data-value="MENU">
                        <div aria-hidden="true" class="text-xs font-medium text-muted-foreground px-2 py-1.5">MENU
                        </div>
                        <div role="group">
                            <a href="#"
                                class="relative flex items-center px-2 py-3 text-sm rounded-sm outline-none cursor-default select-none text-muted-foreground aria-selected:bg-accent aria-selected:text-accent-foreground data-[disabled]:opacity-50 font-medium aria-selected:opacity-50"
                                role="option" data-disabled="false" aria-selected="true" data-value="Dashboard">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="mr-2 lucide lucide-layout-panel-left size-5">
                                    <rect width="7" height="18" x="3" y="3" rx="1"></rect>
                                    <rect width="7" height="7" x="14" y="3" rx="1"></rect>
                                    <rect width="7" height="7" x="14" y="14" rx="1"></rect>
                                </svg>Dashboard
                            </a>
                            <a href="#"
                                class="relative flex items-center px-2 py-3 text-sm rounded-sm outline-none cursor-default select-none text-muted-foreground aria-selected:bg-accent aria-selected:text-accent-foreground data-[disabled]:opacity-50 font-medium aria-selected:opacity-50"
                                role="option" data-disabled="false" aria-selected="false" data-value="Billing">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="mr-2 lucide lucide-credit-card size-5">
                                    <rect width="20" height="14" x="2" y="5" rx="2"></rect>
                                    <line x1="2" x2="22" y1="10" y2="10"></line>
                                </svg>Billing
                            </a>
                            <a href="#"
                                class="relative flex items-center px-2 py-3 text-sm rounded-sm outline-none cursor-default select-none text-muted-foreground aria-selected:bg-accent aria-selected:text-accent-foreground data-[disabled]:opacity-50 font-medium aria-selected:opacity-50"
                                role="option" data-disabled="false" aria-selected="false" data-value="Charts">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="mr-2 lucide lucide-chart-line size-5">
                                    <path d="M3 3v16a2 2 0 0 0 2 2h16"></path>
                                    <path d="m19 9-5 5-4-4-3 3"></path>
                                </svg>Charts
                            </a>
                            <a href="#"
                                class="relative flex items-center px-2 py-3 text-sm rounded-sm outline-none cursor-default select-none text-muted-foreground aria-selected:bg-accent aria-selected:text-accent-foreground data-[disabled]:opacity-50 font-medium aria-selected:opacity-50"
                                role="option" data-disabled="false" aria-selected="false" data-value="User Posts">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="mr-2 lucide lucide-file-text size-5">
                                    <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                    <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                    <path d="M10 9H8"></path>
                                    <path d="M16 13H8"></path>
                                    <path d="M16 17H8"></path>
                                </svg>User Posts
                            </a>
                        </div>
                    </div>
                    <div class="px-2 py-1 overflow-hidden text-foreground" role="presentation" data-value="OPTIONS">
                        <div aria-hidden="true" class="text-xs font-medium text-muted-foreground px-2 py-1.5">
                            OPTIONS
                        </div>
                        <div role="group">
                            <a href="#"
                                class="relative flex items-center px-2 py-3 text-sm rounded-sm outline-none cursor-default select-none text-muted-foreground aria-selected:bg-accent aria-selected:text-accent-foreground data-[disabled]:opacity-50 font-medium aria-selected:opacity-50"
                                role="option" data-disabled="false" aria-selected="false" data-value="Settings">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="mr-2 lucide lucide-settings size-5">
                                    <path
                                        d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z">
                                    </path>
                                    <circle cx="12" cy="12" r="3"></circle>
                                </svg>Settings
                            </a>
                            <a href="#"
                                class="relative flex items-center px-2 py-3 text-sm rounded-sm outline-none cursor-default select-none text-muted-foreground aria-selected:bg-accent aria-selected:text-accent-foreground data-[disabled]:opacity-50 font-medium aria-selected:opacity-50"
                                role="option" data-disabled="false" aria-selected="false" data-value="Homepage">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="mr-2 lucide lucide-house size-5">
                                    <path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"></path>
                                    <path
                                        d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z">
                                    </path>
                                </svg>Homepage
                            </a>
                            <a href="#"
                                class="relative flex items-center px-2 py-3 text-sm rounded-sm outline-none cursor-default select-none text-muted-foreground aria-selected:bg-accent aria-selected:text-accent-foreground data-[disabled]:opacity-50 font-medium aria-selected:opacity-50"
                                role="option" data-disabled="false" aria-selected="false" data-value="Documentation">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="mr-2 lucide lucide-book-open size-5">
                                    <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                                    <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                                </svg>Documentation
                            </a>
                            <a href="#"
                                class="relative flex items-center px-2 py-3 text-sm rounded-sm outline-none cursor-default select-none text-muted-foreground aria-selected:bg-accent aria-selected:text-accent-foreground data-[disabled]:opacity-50 font-medium aria-selected:opacity-50"
                                role="option" data-disabled="false" aria-selected="false" data-value="Support">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="mr-2 lucide lucide-messages-square size-5">
                                    <path d="M14 9a2 2 0 0 1-2 2H6l-4 4V4c0-1.1.9-2 2-2h8a2 2 0 0 1 2 2z"></path>
                                    <path d="M18 9h2a2 2 0 0 1 2 2v11l-4-4h-6a2 2 0 0 1-2-2v-1"></path>
                                </svg>Support
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endpush

@push('js')
    <script type="module">
        window.addEventListener("keydown", function(evt) {
            if (evt.ctrlKey && event.key === 'k') {
                evt.preventDefault();
                const overlay = HSOverlay.getInstance(
                    '[data-hs-overlay="#modal-search-global"]', true);

                if (overlay.element && overlay.element.overlay.classList.contains('open')) return false;

                overlay.element.open();
            }
        });


        $(document).ready(function() {
            // Trigger the function on input field keyup event
            $('input#global-search-dialog').on('keyup', function() {
                // Get the input field value
                var searchTerm = $(this).val().toLowerCase();

                // Iterate over each <a> element
                $('div[role="group"] a').each(function() {
                    // Get the text content of the <a> element
                    var linkText = $(this).text().toLowerCase();

                    // If the search term matches the link text, show the element, otherwise hide it
                    if (linkText.includes(searchTerm)) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            });
        });
    </script>
@endpush
