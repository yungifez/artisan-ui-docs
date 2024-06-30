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
            <x-aui::input label="Name" id="name" value="Pedro Duarte" />
            <x-aui::input label="Username" id="username" value="@peduarte" />
        </div>
        <x-aui::dialog-footer>
            <x-slot:close class="w-full sm:w-fit my-2 sm:my-0">
                <x-aui::button variant="outline" class="w-full">Close</x-aui::button>
            </x-slot:close>
            <x-aui::button>Save changes</x-aui::button>
        </x-aui::dialog-footer>
    </x-slot:content>
</x-aui::dialog>
