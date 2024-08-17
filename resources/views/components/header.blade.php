<header class="sticky top-0 z-50 flex h-14 bg-background px-4 lg:h-[60px] xl:px-8">
    <div class="container flex items-center px-0 max-w-7xl gap-x-3">
        <button
            class="inline-flex items-center justify-center text-sm font-medium focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:opacity-50 disabled:cursor-not-allowed ring-offset-background select-none active:scale-[0.98] border border-input hover:bg-accent hover:text-accent-foreground rounded-md size-9 shrink-0 md:hidden"
            type="button" id="toggleMobileSidebar">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-menu size-5">
                <line x1="4" x2="20" y1="12" y2="12"></line>
                <line x1="4" x2="20" y1="6" y2="6"></line>
                <line x1="4" x2="20" y1="18" y2="18"></line>
            </svg>
            <span class="sr-only">Toggle navigation menu</span>
        </button>
        <div class="flex-1 w-full">
            <button
                class="inline-flex items-center focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:opacity-50 disabled:cursor-not-allowed ring-offset-background select-none active:scale-[0.98] border border-input hover:bg-accent hover:text-accent-foreground py-2 px-4 relative h-9 w-full justify-start rounded-md bg-muted/50 text-sm font-normal text-muted-foreground shadow-none sm:pr-12 md:w-72">
                <span class="inline-flex">Search<span
                        class="hidden sm:inline-flex">&nbsp;documentation</span>...</span><kbd
                    class="pointer-events-none absolute right-[0.3rem] top-[0.45rem] hidden h-5 select-none items-center gap-1 rounded border bg-muted px-1.5 text-[10px] font-medium opacity-100 sm:flex">
                    <span class="text-xs">⌘</span>K</kbd>
            </button>
        </div>
        <div class="relative inline-flex hs-dropdown">
            <button
                class="hs-dropdown-toggle inline-flex items-center justify-center text-sm font-medium transition focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-ring focus-visible:ring-offset-2 disabled:opacity-50 disabled:cursor-not-allowed ring-offset-background select-none active:scale-[0.98] hover:bg-accent hover:text-accent-foreground rounded-md size-8 px-0"
                type="button">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="transition-all scale-100 rotate-0 dark:-rotate-90 dark:scale-0">
                    <circle cx="12" cy="12" r="4"></circle>
                    <path d="M12 3v1"></path>
                    <path d="M12 20v1"></path>
                    <path d="M3 12h1"></path>
                    <path d="M20 12h1"></path>
                    <path d="m18.364 5.636-.707.707"></path>
                    <path d="m6.343 17.657-.707.707"></path>
                    <path d="m5.636 5.636.707.707"></path>
                    <path d="m17.657 17.657.707.707"></path>
                </svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="absolute transition-all scale-0 rotate-90 dark:rotate-0 dark:scale-100">
                    <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"></path>
                </svg>
                <span class="sr-only">Toggle theme</span>
            </button>
            <div class="z-50 min-w-32 overflow-hidden rounded-md border bg-popover p-1 text-popover-foreground hs-dropdown-menu md:transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden shadow-md after:h-4 after:absolute after:-bottom-4 after:start-0 after:w-full before:h-2 before:absolute before:-top-2 before:start-0 before:w-full"
                tabindex="-1">
                <button type="button"
                    class="relative flex items-center rounded-sm px-2 py-1.5 text-sm outline-none md:transition-colors focus:bg-accent hover:bg-accent focus:text-accent-foreground w-full"
                    tabindex="-1" data-tw-theme="light">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="mr-2 lucide lucide-sun-medium size-4">
                        <circle cx="12" cy="12" r="4"></circle>
                        <path d="M12 3v1"></path>
                        <path d="M12 20v1"></path>
                        <path d="M3 12h1"></path>
                        <path d="M20 12h1"></path>
                        <path d="m18.364 5.636-.707.707"></path>
                        <path d="m6.343 17.657-.707.707"></path>
                        <path d="m5.636 5.636.707.707"></path>
                        <path d="m17.657 17.657.707.707"></path>
                    </svg><span>Light</span>
                </button>
                <button type="button"
                    class="relative flex items-center rounded-sm px-2 py-1.5 text-sm outline-none md:transition-colors focus:bg-accent hover:bg-accent focus:text-accent-foreground w-full"
                    tabindex="-1" data-tw-theme="dark">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="mr-2 lucide lucide-moon size-4">
                        <path d="M12 3a6 6 0 0 0 9 9 9 9 0 1 1-9-9Z"></path>
                    </svg><span>Dark</span>
                </button>
                <button type="button"
                    class="relative flex items-center rounded-sm px-2 py-1.5 text-sm outline-none md:transition-colors focus:bg-accent hover:bg-accent focus:text-accent-foreground w-full"
                    tabindex="-1" data-tw-theme="system">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="mr-2 lucide lucide-laptop size-4">
                        <path
                            d="M20 16V7a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v9m16 0H4m16 0 1.28 2.55a1 1 0 0 1-.9 1.45H3.62a1 1 0 0 1-.9-1.45L4 16">
                        </path>
                    </svg><span>System</span>
                </button>
            </div>
        </div>
        <div class="relative inline-flex hs-dropdown">
            <button type="button" class="hs-dropdown-toggle">
                <span
                    class="relative flex items-center justify-center overflow-hidden bg-blue-500 border rounded-full shrink-0 size-8">
                    <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                        width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-width="2"
                            d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                    </svg>
                </span>
            </button>
            <div class="z-50 min-w-32 overflow-hidden rounded-md border bg-popover p-1 text-popover-foreground hs-dropdown-menu md:transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden shadow-md mt-2 dark:bg-neutral-800 dark:border dark:border-neutral-700 dark:divide-neutral-700 after:h-4 after:absolute after:-bottom-4 after:start-0 after:w-full before:h-4 before:absolute before:-top-4 before:start-0 before:w-full"
                tabindex="-1">
                <div class="flex items-center justify-start gap-2 p-2">
                    <div class="flex flex-col space-y-1 leading-none">
                        <p class="font-medium">John Doe</p>
                        <p class="w-[200px] truncate text-sm text-muted-foreground">johndoe@cloud.com</p>
                    </div>
                </div>
                <div role="separator" aria-orientation="horizontal" class="h-px my-1 -mx-1 bg-muted"></div>
                <a class="relative flex items-center rounded-sm px-2 py-1.5 text-sm outline-none md:transition-colors focus:bg-accent focus:text-accent-foreground hover:bg-accent space-x-2.5"
                    role="menuitem" href="/">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-layout-dashboard size-4">
                        <rect width="7" height="9" x="3" y="3" rx="1"></rect>
                        <rect width="7" height="5" x="14" y="3" rx="1"></rect>
                        <rect width="7" height="9" x="14" y="12" rx="1"></rect>
                        <rect width="7" height="5" x="3" y="16" rx="1"></rect>
                    </svg>
                    <p class="text-sm">Dashboard</p>
                </a>
                <a class="relative flex items-center rounded-sm px-2 py-1.5 text-sm outline-none md:transition-colors focus:bg-accent focus:text-accent-foreground hover:bg-accent space-x-2.5"
                    role="menuitem" href="/">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="lucide lucide-settings size-4">
                        <path
                            d="M12.22 2h-.44a2 2 0 0 0-2 2v.18a2 2 0 0 1-1 1.73l-.43.25a2 2 0 0 1-2 0l-.15-.08a2 2 0 0 0-2.73.73l-.22.38a2 2 0 0 0 .73 2.73l.15.1a2 2 0 0 1 1 1.72v.51a2 2 0 0 1-1 1.74l-.15.09a2 2 0 0 0-.73 2.73l.22.38a2 2 0 0 0 2.73.73l.15-.08a2 2 0 0 1 2 0l.43.25a2 2 0 0 1 1 1.73V20a2 2 0 0 0 2 2h.44a2 2 0 0 0 2-2v-.18a2 2 0 0 1 1-1.73l.43-.25a2 2 0 0 1 2 0l.15.08a2 2 0 0 0 2.73-.73l.22-.39a2 2 0 0 0-.73-2.73l-.15-.08a2 2 0 0 1-1-1.74v-.5a2 2 0 0 1 1-1.74l.15-.09a2 2 0 0 0 .73-2.73l-.22-.38a2 2 0 0 0-2.73-.73l-.15.08a2 2 0 0 1-2 0l-.43-.25a2 2 0 0 1-1-1.73V4a2 2 0 0 0-2-2z">
                        </path>
                        <circle cx="12" cy="12" r="3"></circle>
                    </svg>
                    <p class="text-sm">Settings</p>
                </a>
                <div role="separator" aria-orientation="horizontal" class="h-px my-1 -mx-1 bg-muted"></div>
                <div role="menuitem"
                    class="relative flex items-center rounded-sm px-2 py-1.5 text-sm outline-none md:transition-colors focus:bg-accent focus:text-accent-foreground hover:bg-accent cursor-pointer">
                    <div class="flex items-center space-x-2.5">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" class="lucide lucide-log-out size-4">
                            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                            <polyline points="16 17 21 12 16 7"></polyline>
                            <line x1="21" x2="9" y1="12" y2="12"></line>
                        </svg>
                        <p class="text-sm">Log out </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
