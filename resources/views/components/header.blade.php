<header
    class="sticky top-0 z-10 w-full border-b border-border/40 backdrop-blur supports-[backdrop-filter]:bg-background/60 bg-background/95">
    <div class="container flex h-14 max-w-screen-2xl items-center">
        <div class="mr-4 hidden md:flex">
            <a href="{{route('home')}}"
                class="mr-6 flex no-underline items-center space-x-2 font-bold">{{config("app.name")}}</a>
            <nav class="flex items-center gap-4 text-sm lg:gap-6">
                <x-link href="{{'/docs/' . config('aui.latest-version')}}">Docs</x-link>
                <x-link href="{{'/docs/' . config('aui.latest-version').'/components/accordion'}}">Components</x-link>
            </nav>
        </div>
        <div class="flex flex-1 items-center justify-between space-x-2 md:justify-end">
            <x-aui::dialog dismissable x-teleport="body">
                <x-slot:group class="w-full flex-1 md:w-auto md:flex-none"></x-slot:group>
                <x-slot:trigger class="w-full">
                    <x-aui::button size="sm" variant="outline"
                        class="md:w-40 text-muted-foreground lg:w-64 w-full flex relative justify-between items-center">
                        <span>
                            Search<span class="hidden lg:inline"> Documentation</span>...
                        </span>
                        <kbd
                            class="pointer-events-none hidden h-5 select-none items-center gap-x-1 rounded border bg-muted px-1.5 font-mono text-[10px] font-medium opacity-100 sm:flex">
                            <span class="text-xs">⌘</span>K
                        </kbd>
                    </x-aui::button>
                </x-slot:trigger>
                <x-slot:content>
                    hi
                </x-slot:content>
            </x-aui::dialog>
            <nav class="flex items-center gap-2">
                <a target="_blank" rel="noreferrer" href="https://github.com/yungifez/artisan-ui">
                    <div
                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 py-2 w-9 px-0">
                        <i class="fa-brands fa-github"></i>
                        <span class="sr-only">GitHub</span>
                    </div>
                </a>
                <a target="_blank" rel="noreferrer" href="">
                    <div
                        class="inline-flex items-center justify-center whitespace-nowrap rounded-md text-sm font-medium transition-colors focus-visible:outline-none focus-visible:ring-1 focus-visible:ring-ring disabled:pointer-events-none disabled:opacity-50 hover:bg-accent hover:text-accent-foreground h-9 py-2 w-9 px-0">
                        <i class="fa-brands fa-x-twitter"></i>
                        <span class="sr-only">Twitter</span>
                    </div>
                </a>
                <x-aui::dropdown-menu>
                    <x-slot:dropdown-menu-trigger>
                        <x-aui::button size="icon" variant="ghost" type="button">
                            <i class="fa fa-sun"></i>
                            <span class="mx-1">/</span>
                            <i class="fas fa-moon"></i>
                        </x-aui::button>
                        <x-slot:dropdown-menu-content class="w-40">
                            <x-aui::dropdown-menu-item size="sm" variant="outline" type="button"
                                class="w-full focus-visible:outline-none"
                                x-on:click="localStorage.theme = 'light'; determineColorMode()">
                                <p class="text-sm">Light</p>
                            </x-aui::dropdown-menu-item>
                            <x-aui::dropdown-menu-item size="sm" variant="outline" type="button"
                                class="w-full focus-visible:outline-none"
                                x-on:click="localStorage.theme = 'dark'; determineColorMode()">
                                <p class="text-sm">Dark</p>
                            </x-aui::dropdown-menu-item>
                            <x-aui::dropdown-menu-item size="sm" variant="outline" type="button"
                                class="w-full focus-visible:outline-none"
                                x-on:click="localStorage.removeItem('theme'); determineColorMode()">
                                <p class="text-sm">System</p>
                            </x-aui::dropdown-menu-item>
                        </x-slot:dropdown-menu-content>
                    </x-slot:dropdown-menu-trigger>
                </x-aui::dropdown-menu>
            </nav>
        </div>
    </div>
</header>
