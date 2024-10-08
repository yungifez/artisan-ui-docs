<x-aui::accordion type="single" collapsible class="w-full md:w-[70%]">
    <x-aui::accordion-item>
        <x-slot:trigger>What is Artisan UI</x-slot:trigger>
        <x-slot:content>
            Artisan UI is a set of styled laravel blade components
            that takes inspiration from shadCN.
        </x-slot:content>
    </x-aui::accordion-item>
    <x-aui::accordion-item>
        <x-slot:trigger>What Technology is it built with?</x-slot:trigger>
        <x-slot:content>
            It is built using Laravel blade, tailwind CSS, and alpine JS.
        </x-slot:content>
    </x-aui::accordion-item>
    <x-aui::accordion-item>
        <x-slot:trigger>Did any other library inspire this project?</x-slot:trigger>
        <x-slot:content>
            Yes. A lot of code was borrowed from Pines UI, and some
            ideas were gotten from Mary UI.
        </x-slot:content>
    </x-aui::accordion-item>
</x-aui::accordion>
