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
            <x-aui::breadcrumb-link href="/docs/0.x/components/accordion">Components</x-aui::breadcrumb-link>
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
