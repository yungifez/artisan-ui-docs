<x-aui::breadcrumb>
    <x-slot:list>
        <x-aui::breadcrumb-item>
            <x-aui::breadcrumb-link href="/">Home</x-aui::breadcrumb-link>
        </x-aui::breadcrumb-item>
        <x-aui::breadcrumb-separator />
        <x-aui::breadcrumb-item>
            <x-aui::dropdown-menu>
                <x-slot:trigger class="flex items-center gap-1">
                    <x-aui::breadcrumb-elipsis />
                    <span class="sr-only">Toggle menu</span>
                </x-slot:trigger>
                <x-slot:content align="start">
                    <x-aui::dropdown-menu-item>Documentation</x-aui::dropdown-menu-item>
                    <x-aui::dropdown-menu-item>Themes</x-aui::dropdown-menu-item>
                    <x-aui::dropdown-menu-item>GitHub</x-aui::dropdown-menu-item>
                </x-slot:content>
            </x-aui::dropdown-menu>
        </x-aui::breadcrumb-item>
        <x-aui::breadcrumb-separator />
        <x-aui::breadcrumb-item>
            <x-aui::breadcrumb-link href="/docs/0.x/components/accordion">Components</x-aui::breadcrumb-link>
        </x-aui::breadcrumb-item>
        <x-aui::breadcrumb-separator />
        <x-aui::breadcrumb-item>
            <x-aui::breadcrumb-page>Breadcrumb</x-aui::breadcrumb-page>
        </x-aui::breadcrumb-item>
    </x-slot:list>
</x-aui::breadcrumb>
