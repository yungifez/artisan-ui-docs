<x-aui::popover>
    <x-slot:trigger>
        <x-aui::button variant="outline">Open popover</x-aui::button>
    </x-slot:trigger>
    <x-slot:popover-content class="w-80">
        <div class="grid gap-4">
            <div class="space-y-2">
                <h4 class="font-medium leading-none">Dimensions</h4>
                <p class="text-sm text-muted-foreground">
                    Set the dimensions for the layer.
                </p>
            </div>
            <div class="grid gap-2">
                <div class="grid grid-cols-3 items-center gap-4">
                    <x-aui::label for="width">Width</x-aui::label>
                    <x-aui::input id="width" value="100%" class="col-span-2 h-8" />
                </div>
                <div class="grid grid-cols-3 items-center gap-4">
                    <x-aui::label for="maxWidth">Max. width</x-aui::label>
                    <x-aui::input id="maxWidth" value="300px" class="col-span-2 h-8" />
                </div>
                <div class="grid grid-cols-3 items-center gap-4">
                    <x-aui::label for="height">Height</x-aui::label>
                    <x-aui::input id="height" value="25px" class="col-span-2 h-8" />
                </div>
                <div class="grid grid-cols-3 items-center gap-4">
                    <x-aui::label for="maxHeight">Max. height</x-aui::label>
                    <x-aui::input id="maxHeight" value="none" class="col-span-2 h-8" />
                </div>
            </div>
        </div>
    </x-slot:popover-content>
</x-aui::popover>
