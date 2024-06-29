<x-aui::card class="w-[350px]">
    <x-slot:title class="mt-0">Create project</x-slot:title>
    <x-slot:description>Deploy your new project in one-click.</x-slot:description>
    <x-slot:content>
        <form>
            <div class="grid w-full items-center gap-4">
                <x-aui::input id="name" label="Name" placeholder="Name of your project" />
                <x-aui::select id="library" label="Library">
                    <option>Artisan UI</option>
                    <option>Filament PHP</option>
                    <option>Mary UI</option>
                    <option>Pines UI</option>
                </x-aui::select>
            </div>
        </form>
    </x-slot:content>
    <x-slot:footer class="flex justify-between">
        <x-aui::button variant="outline">Cancel</x-aui::button>
        <x-aui::button>Deploy</x-aui::button>
    </x-slot:footer>
</x-aui::card>
