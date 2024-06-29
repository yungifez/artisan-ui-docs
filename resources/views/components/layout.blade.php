<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    @php(isset($title) ? $title = $title.' | '.config('app.name') : $title = config('app.name'))
    <title>{{$title}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="author" content="John Doe">
    <meta name="description" content="Description of the page less than 150 characters">
    <meta name="theme-color" content="#303030">
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{$title}}">
    <meta property="og:description" content="Description of the page less than 150 characters">
    <meta property="og:image" content="/some-image.png">
    <meta property="og:url" content="/this-page.html">
    <meta property="og:site_name" content="{{config('app.name')}}">
    <meta property="og:locale" content="en_US">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="/this-page.html">
    <meta name="twitter:title" content="{{$title}}">
    <meta name="twitter:image" content="/image.jpg">
    <link rel="icon" type="image/png" href="/favicon.png" />
    <link rel="apple-touch-icon" type="image/png" sizes="76x76" href="/favicon.png?width=76" />
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5" />
    <link rel="canonical" href="">
    @vite('resources/css/app.css')
    @stack('head-scripts')
    <livewire:styles />
    <script>
        function determineColorMode() {
            if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
                document.documentElement.classList.add('dark')
            } else {
                document.documentElement.classList.remove('dark')
            }
        }

        determineColorMode();
        window.addEventListener("storage", (event) => {
            if (event.key == "theme") {
                determineColorMode()
            }
        });
    </script>
</head>

<body class="scroll-smooth">
    <x-header />
    <main class="max-w-screen min-h-screen">
        {!!$slot!!}
    </main>
    <aside></aside>
    <footer></footer>
</body>
@vite('resources/js/app.js')
<livewire:scripts />
@artisanScripts

</html>
