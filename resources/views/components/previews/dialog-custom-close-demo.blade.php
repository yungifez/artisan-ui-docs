<x-aui::dialog dismissable>
    <x-slot:trigger>
        <x-aui::button variant="outline">
            Edit Profile
        </x-aui::button>
    </x-slot:trigger>
    <x-slot:content class="sm:max-w-[425px]">
        <x-aui::dialog-header>
            <x-slot:title>
                Edit profile
            </x-slot:title>
            <x-slot:description>
                Make changes to your profile here. Click save when you're done.
            </x-slot:description>
        </x-aui::dialog-header>
        <div class="grid gap-4 py-4">
            <div class="grid grid-cols-4 items-center gap-4">
                <x-aui::label for="name-2" class="text-right">Name</x-aui::label>
                <x-aui::input id="name-2" value="Pedro Duarte" class="col-span-3" />
            </div>
            <div class="grid grid-cols-4 items-center gap-4">
                <x-aui::label class="text-right" for="username-2" class="text-right">Username</x-aui::label>
                <x-aui::input class="col-span-3" id="username-2" value="@peduarte" />
            </div>
        </div>
        <x-aui::dialog-footer>
            <x-slot:close class="w-full sm:w-fit my-2 sm:my-0">
                <x-aui::button variant="outline" class="w-full justify-center">Close</x-aui::button>
            </x-slot:close>
            <x-aui::button class="justify-center">Save changes</x-aui::button>
        </x-aui::dialog-footer>
    </x-slot:content>
</x-aui::dialog>
