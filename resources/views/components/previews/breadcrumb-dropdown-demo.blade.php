<x-aui::breadcrumb>
    <x-slot:list>
        <x-aui::breadcrumb-item>
            <x-aui::breadcrumb-link href="/">Home</x-aui::breadcrumb-link>
        </x-aui::breadcrumb-item>
        <x-aui::breadcrumb-separator>
            <x-slot:separator>
                /
            </x-slot:separator>
        </x-aui::breadcrumb-separator>
        <x-aui::breadcrumb-item>
            <x-aui::dropdown-menu>
                <x-slot:trigger>
                    <button class="bg-transparent cursor-pointer flex items-center gap-1">
                        Components
                        <i class="fas fa-angle-down"></i>
                    </button>
                </x-slot:trigger>
                <x-slot:content align="start">
                    <x-aui::dropdown-menu-item>Documentation</x-aui::dropdown-menu-item>
                    <x-aui::dropdown-menu-item>Themes</x-aui::dropdown-menu-item>
                    <x-aui::dropdown-menu-item>GitHub</x-aui::dropdown-menu-item>
                </x-slot:content>
            </x-aui::dropdown-menu>
        </x-aui::breadcrumb-item>
        <x-aui::breadcrumb-separator>
            <x-slot:separator>
                /
            </x-slot:separator>
        </x-aui::breadcrumb-separator>
        <x-aui::breadcrumb-item>
            <x-aui::breadcrumb-page>Breadcrumb</x-aui::breadcrumb-page>
        </x-aui::breadcrumb-item>
    </x-slot:list>
</x-aui::breadcrumb>
