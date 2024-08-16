<div class="sticky top-0 h-full group">
    <div dir="ltr" id="sidebarscroller__" class="relative h-full overflow-hidden overflow-y-auto border-r border-border">
        <div class="size-full rounded-[inherit]" style="overflow: hidden scroll;">
            <aside class="w-[220px] xl:w-[260px] hidden h-screen md:block">
                <div class="flex flex-col flex-1 h-full max-h-screen gap-2">
                    <div class="flex h-14 items-center p-4 lg:h-[60px]">
                        @include('components.dropdown-project')
                        <button
                            class="inline-flex items-center justify-center text-sm font-medium transition focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:opacity-50 disabled:cursor-not-allowed ring-offset-background select-none active:scale-[0.98] hover:bg-accent hover:text-accent-foreground rounded-md ml-auto size-9 lg:size-8">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-panel-left-close stroke-muted-foreground">
                                <rect width="18" height="18" x="3" y="3" rx="2"></rect>
                                <path d="M9 3v18"></path>
                                <path d="m16 15-3-3 3-3"></path>
                            </svg>
                            <span class="sr-only">Toggle Sidebar</span>
                        </button>
                    </div>
                    <nav class="flex flex-col flex-1 gap-8 px-4 pt-4">
                        <section class="flex flex-col gap-0.5">
                            <p class="text-xs text-muted-foreground">MENU</p>
                            <a class="flex items-center gap-3 p-2 text-sm font-medium rounded-md hover:bg-muted bg-muted"
                                href="/">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-layout-panel-left size-5">
                                    <rect width="7" height="18" x="3" y="3" rx="1"></rect>
                                    <rect width="7" height="7" x="14" y="3" rx="1"></rect>
                                    <rect width="7" height="7" x="14" y="14" rx="1"></rect>
                                </svg>Dashboard
                            </a>
                            <a class="flex items-center gap-3 p-2 text-sm font-medium rounded-md hover:bg-muted text-muted-foreground hover:text-accent-foreground"
                                href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-credit-card size-5">
                                    <rect width="20" height="14" x="2" y="5" rx="2"></rect>
                                    <line x1="2" x2="22" y1="10" y2="10"></line>
                                </svg>Billing
                            </a>
                            <a class="flex items-center gap-3 p-2 text-sm font-medium rounded-md hover:bg-muted text-muted-foreground hover:text-accent-foreground"
                                href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-chart-line size-5">
                                    <path d="M3 3v16a2 2 0 0 0 2 2h16"></path>
                                    <path d="m19 9-5 5-4-4-3 3"></path>
                                </svg>Charts
                            </a>
                            <a class="flex items-center gap-3 p-2 text-sm font-medium rounded-md cursor-not-allowed text-muted-foreground opacity-80 hover:bg-transparent hover:text-muted-foreground"
                                href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-file-text size-5">
                                    <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z"></path>
                                    <path d="M14 2v4a2 2 0 0 0 2 2h4"></path>
                                    <path d="M10 9H8"></path>
                                    <path d="M16 13H8"></path>
                                    <path d="M16 17H8"></path>
                                </svg>User Posts
                            </a>
                        </section>
                        <section class="flex flex-col gap-0.5">
                            <p class="text-xs text-muted-foreground">OPTIONS</p>
                            <a class="flex items-center gap-3 p-2 text-sm font-medium rounded-md hover:bg-muted text-muted-foreground hover:text-accent-foreground"
                                href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-settings size-5">
                                    <path
                                        d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z">
                                    </path>
                                    <circle cx="12" cy="12" r="3"></circle>
                                </svg>Settings
                            </a>
                            <a class="flex items-center gap-3 p-2 text-sm font-medium rounded-md hover:bg-muted text-muted-foreground hover:text-accent-foreground"
                                href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-house size-5">
                                    <path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"></path>
                                    <path
                                        d="M3 10a2 2 0 0 1 .709-1.528l7-5.999a2 2 0 0 1 2.582 0l7 5.999A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z">
                                    </path>
                                </svg>Homepage
                            </a>
                            <a class="flex items-center gap-3 p-2 text-sm font-medium rounded-md hover:bg-muted text-muted-foreground hover:text-accent-foreground"
                                href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-book-open size-5">
                                    <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z"></path>
                                    <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z"></path>
                                </svg>Documentation
                            </a>
                            <a class="flex items-center gap-3 p-2 text-sm font-medium rounded-md cursor-not-allowed text-muted-foreground opacity-80 hover:bg-transparent hover:text-muted-foreground"
                                href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round"
                                    class="lucide lucide-messages-square size-5">
                                    <path d="M14 9a2 2 0 0 1-2 2H6l-4 4V4c0-1.1.9-2 2-2h8a2 2 0 0 1 2 2z"></path>
                                    <path d="M18 9h2a2 2 0 0 1 2 2v11l-4-4h-6a2 2 0 0 1-2-2v-1"></path>
                                </svg>Support
                            </a>
                        </section>
                    </nav>
                    @include('components.upgrade-pro')
                </div>
            </aside>
        </div>
    </div>
</div>
