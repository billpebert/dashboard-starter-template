<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Detect app theme on page load --}}
    <script defer>
        !function(){try{var e=document.documentElement,t=e.classList;t.remove("light","dark");var o=localStorage.getItem("theme");if("system"===o||!o&&!0){var r="(prefers-color-scheme: dark)",l=window.matchMedia(r);l.media!==r||l.matches?(e.style.colorScheme="dark",t.add("dark")):(e.style.colorScheme="light",t.add("light"))}else o&&t.add(o||"");"light"!==o&&"dark"!==o||(e.style.colorScheme=o)}catch(e){}}();
    </script>

    @stack('css')
</head>

<body class="min-h-screen bg-background" id="app_body">
    <div class="relative flex w-full min-h-screen">
        @include('components.sidebar')

        <div class="flex flex-col flex-1">
            @include('components.header')
            <main class="flex-1 p-4 xl:px-8">
                <div class="container flex flex-col h-full gap-4 px-0 max-w-7xl mx-auto lg:gap-6">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>

    @stack('modal')

    @stack('js')
</body>

</html>
