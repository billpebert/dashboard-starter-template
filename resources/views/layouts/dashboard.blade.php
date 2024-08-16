<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script>
        ! function() {
            try {
                var d = document.documentElement,
                    c = d.classList;
                c.remove('light', 'dark');
                var e = localStorage.getItem('theme');
                if ('system' === e || (!e && true)) {
                    var t = '(prefers-color-scheme: dark)',
                        m = window.matchMedia(t);
                    if (m.media !== t || m.matches) {
                        d.style.colorScheme = 'dark';
                        c.add('dark')
                    } else {
                        d.style.colorScheme = 'light';
                        c.add('light')
                    }
                } else if (e) {
                    c.add(e || '')
                }
                if (e === 'light' || e === 'dark') d.style.colorScheme = e
            } catch (e) {}
        }()
    </script>

    @stack('css')
</head>

<body class="min-h-screen bg-background">
    <div class="relative flex w-full min-h-screen">
        @include('components.sidebar')

        <div class="flex flex-col flex-1">
            @include('components.header')
            <main class="flex-1 p-4 xl:px-8">
                <div class="container flex flex-col h-full gap-4 px-0 max-w-7xl lg:gap-6">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>

    @stack('js')
</body>

</html>
