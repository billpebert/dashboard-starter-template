<aside id="sidebar_wrapper" class="fixed z-[100] transition-all duration-300 md:transition-none md:duration-0 top-0 md:sticky bg-background opacity-0 md:opacity-100">
    <div
        class="w-[calc(100vw-100px)] shadow-lg md:shadow-none md:w-[220px] xl:w-[260px] h-screen overflow-y-auto border-r border-border"
        id="sidebaroverlay__" data-overlayscrollbars-initialize>
        <div class="relative flex flex-col flex-1 h-full max-h-screen p-6 md:p-0 gap-y-8 md:gap-y-2">
            {{-- Close mobile sidebar --}}
            <button type="button"
                class="absolute block transition-opacity rounded-sm right-4 top-4 opacity-70 ring-offset-background hover:opacity-100 focus:outline-none focus:ring-2 focus:ring-ring focus:ring-offset-2 disabled:pointer-events-none md:hidden" id="closeSidebar">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-x size-4">
                    <path d="M18 6 6 18"></path>
                    <path d="m6 6 12 12"></path>
                </svg>
                <span class="sr-only">Close</span>
            </button>

            {{-- App Logo on Mobile screen --}}
            <a class="flex items-center gap-2 text-lg font-semibold md:hidden" href="#"><svg
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="lucide lucide-puzzle size-6">
                    <path
                        d="M19.439 7.85c-.049.322.059.648.289.878l1.568 1.568c.47.47.706 1.087.706 1.704s-.235 1.233-.706 1.704l-1.611 1.611a.98.98 0 0 1-.837.276c-.47-.07-.802-.48-.968-.925a2.501 2.501 0 1 0-3.214 3.214c.446.166.855.497.925.968a.979.979 0 0 1-.276.837l-1.61 1.61a2.404 2.404 0 0 1-1.705.707 2.402 2.402 0 0 1-1.704-.706l-1.568-1.568a1.026 1.026 0 0 0-.877-.29c-.493.074-.84.504-1.02.968a2.5 2.5 0 1 1-3.237-3.237c.464-.18.894-.527.967-1.02a1.026 1.026 0 0 0-.289-.877l-1.568-1.568A2.402 2.402 0 0 1 1.998 12c0-.617.236-1.234.706-1.704L4.23 8.77c.24-.24.581-.353.917-.303.515.077.877.528 1.073 1.01a2.5 2.5 0 1 0 3.259-3.259c-.482-.196-.933-.558-1.01-1.073-.05-.336.062-.676.303-.917l1.525-1.525A2.402 2.402 0 0 1 12 1.998c.617 0 1.234.236 1.704.706l1.568 1.568c.23.23.556.338.877.29.493-.074.84-.504 1.02-.968a2.5 2.5 0 1 1 3.237 3.237c-.464.18-.894.527-.967 1.02Z">
                    </path>
                </svg><span class="text-xl font-bold font-urban">SaaS Starter</span></a>
            <div class="flex md:h-14 items-center md:p-4 lg:h-[60px]">
                @include('components.dropdown-project')

                {{-- Navbar toggler --}}
                <button
                    class="hidden md:inline-flex items-center justify-center text-sm font-medium transition focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:opacity-50 disabled:cursor-not-allowed ring-offset-background select-none active:scale-[0.98] hover:bg-accent hover:text-accent-foreground rounded-md ml-auto size-9 lg:size-8"
                    id="mini_nav_toggler">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide-panel-left-close stroke-muted-foreground">
                        <rect width="18" height="18" x="3" y="3" rx="2"></rect>
                        <path d="M9 3v18"></path>
                        <path d="m16 15-3-3 3-3"></path>
                    </svg>

                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="hidden lucide-panel-right-close stroke-muted-foreground">
                        <rect width="18" height="18" x="3" y="3" rx="2"></rect>
                        <path d="M15 3v18"></path>
                        <path d="m8 9 3 3-3 3"></path>
                    </svg>
                    <span class="sr-only">Toggle Sidebar</span>
                </button>
            </div>
            <nav class="flex flex-col flex-1 gap-8 md:px-4 md:pt-4">
                <section class="flex flex-col gap-0.5">
                    <p class="text-xs text-muted-foreground" data-sub-menu-title>MENU</p>
                    <a class="relative flex items-center gap-3 p-2 text-sm font-medium rounded-md hover:bg-muted bg-muted group"
                        href="/" data-nav-item>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-layout-panel-left size-5">
                            <rect width="7" height="18" x="3" y="3" rx="1"></rect>
                            <rect width="7" height="7" x="14" y="3" rx="1"></rect>
                            <rect width="7" height="7" x="14" y="14" rx="1"></rect>
                        </svg>
                        <span>Dashboard</span>
                    </a>

                    <a class="relative flex items-center gap-3 p-2 text-sm font-medium rounded-md hover:bg-muted text-muted-foreground hover:text-accent-foreground group"
                        href="#" data-nav-item>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-credit-card size-5">
                            <rect width="20" height="14" x="2" y="5" rx="2"></rect>
                            <line x1="2" x2="22" y1="10" y2="10"></line>
                        </svg>
                        <span>Billing</span>
                    </a>
                    <a class="relative flex items-center gap-3 p-2 text-sm font-medium rounded-md hover:bg-muted text-muted-foreground hover:text-accent-foreground group"
                        href="#" data-nav-item>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-chart-line size-5">
                            <path d="M3 3v16a2 2 0 0 0 2 2h16"></path>
                            <path d="m19 9-5 5-4-4-3 3"></path>
                        </svg>
                        <span>Charts</span>
                    </a>
                    <a class="relative flex items-center gap-3 p-2 text-sm font-medium rounded-md cursor-not-allowed text-muted-foreground opacity-80 hover:bg-transparent hover:text-muted-foreground group"
                        href="#" data-nav-item>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-file-text size-5">
                            <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                            <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                            <path d="M10 9H8"></path>
                            <path d="M16 13H8"></path>
                            <path d="M16 17H8"></path>
                        </svg>
                        <span>User Posts</span>
                    </a>
                </section>
                <section class="flex flex-col gap-0.5">
                    <p class="text-xs text-muted-foreground" data-sub-menu-title>OPTIONS</p>
                    <a class="relative flex items-center gap-3 p-2 text-sm font-medium rounded-md hover:bg-muted text-muted-foreground hover:text-accent-foreground group"
                        href="#" data-nav-item>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-settings size-5">
                            <path
                                d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z">
                            </path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg>
                        <span>Settings</span>
                    </a>
                    <a class="relative flex items-center gap-3 p-2 text-sm font-medium rounded-md hover:bg-muted text-muted-foreground hover:text-accent-foreground group"
                        href="#" data-nav-item>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-house size-5">
                            <path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"></path>
                            <path
                                d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z">
                            </path>
                        </svg>
                        <span>Homepage</span>
                    </a>
                    <a class="relative flex items-center gap-3 p-2 text-sm font-medium rounded-md hover:bg-muted text-muted-foreground hover:text-accent-foreground group"
                        href="#" data-nav-item>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-book-open size-5">
                            <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                            <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                        </svg>
                        <span>Documentation</span>
                    </a>
                    <a class="relative flex items-center gap-3 p-2 text-sm font-medium rounded-md cursor-not-allowed text-muted-foreground opacity-80 hover:bg-transparent hover:text-muted-foreground group"
                        href="#" data-nav-item>
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-messages-square size-5">
                            <path d="M14 9a2 2 0 0 1-2 2H6l-4 4V4c0-1.1.9-2 2-2h8a2 2 0 0 1 2 2z"></path>
                            <path d="M18 9h2a2 2 0 0 1 2 2v11l-4-4h-6a2 2 0 0 1-2-2v-1"></path>
                        </svg>
                        <span>Support</span>
                    </a>
                </section>
            </nav>
            @include('components.upgrade-pro')
        </div>
    </div>
</aside>

{{-- sidebar backdrop --}}
<div class="fixed inset-0 z-[99] hidden bg-background/80 backdrop-blur-sm min-h-dvh lg:hidden transition-all duration-300" aria-hidden="true"
    id="backdropFixed"></div>

@push('js')
    <script type="module">

        if($(window).width() < 768) {
            hideMobileSidebar()
        }

        function hideMobileSidebar() {
            $('#sidebar_wrapper').addClass('-translate-x-full opacity-0')
            $('#backdropFixed').addClass('hidden')
        }

        function showMobileSidebar() {
            $('#sidebar_wrapper').removeClass('-translate-x-full opacity-0')
            $('#backdropFixed').removeClass('hidden')
        }

        $(() => {
            $('#mini_nav_toggler').on('click', function() {
                toggleMiniSidebar()
            })

            function toggleMiniSidebar() {
                $('#sidebaroverlay__').toggleClass('!w-[68px]') // toggle width
                $('#project_options').toggleClass('hidden')
                $('#mini_nav_toggler').find('.lucide-panel-left-close').toggleClass('hidden')
                $('#mini_nav_toggler').find('.lucide-panel-right-close').toggleClass('hidden')
                $('[data-sub-menu-title]').toggleClass('opacity-0')
                $('[data-nav-item] span').toggleClass(
                    'absolute opacity-0 group-hover:opacity-100 z-50 whitespace-nowrap left-full bg-background shadow-md group-hover:left-[120%] py-1.5 px-3 rounded-md text-sm font-normal text-foreground invisible group-hover:visible'
                )

                setTimeout(() => {
                    $('[data-nav-item] span').toggleClass('transition-all')
                }, 300);
                $('#upgrade_to_pro').toggleClass('hidden')
            }

            $(window).on('resize', function() {
                if($(window).width() < 768) {
                    hideMobileSidebar()
                } else {
                    $('#sidebar_wrapper').removeClass('-translate-x-full opacity-0')
                }
            })

            $('#toggleMobileSidebar').on('click', function() {
                showMobileSidebar()
            })

            $('#closeSidebar, #backdropFixed').on('click', function() {
                hideMobileSidebar()
            })
        })
    </script>
@endpush
