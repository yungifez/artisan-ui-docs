<div class="grid grid-cols-2 gap-2">
    <x-aui::sheet dismissable>
        <x-slot:trigger>
            <x-aui::button class="w-full justify-center" variant="outline">
                Top
            </x-aui::button>
        </x-slot:trigger>
        <x-slot:content side="top">
            <x-aui::sheet-header>
                <x-slot:title>
                    Edit profile
                </x-slot:title>
                <x-slot:description>
                    Make changes to your profile here. Click save when you're done.
                </x-slot:description>
            </x-aui::sheet-header>
            <div class="grid gap-4 py-4">
                <div class="grid grid-cols-4 items-center gap-4">
                    <x-aui::label for="name-1-top" class="text-right">Name</x-aui::label>
                    <x-aui::input id="name-1-top" value="Pedro Duarte" class="col-span-3" />
                </div>
                <div class="grid grid-cols-4 items-center gap-4">
                    <x-aui::label class="text-right" for="username-1-top" class="text-right">Username</x-aui::label>
                    <x-aui::input class="col-span-3" id="username-1-top" value="@peduarte" />
                </div>
            </div>
            <x-aui::sheet-footer>
                <x-aui::button class="justify-center">Save changes</x-aui::button>
            </x-aui::sheet-footer>
        </x-slot:content>
    </x-aui::sheet>
    <x-aui::sheet dismissable>
        <x-slot:trigger>
            <x-aui::button class="w-full justify-center" variant="outline">
                Right
            </x-aui::button>
        </x-slot:trigger>
        <x-slot:content side="right">
            <x-aui::sheet-header>
                <x-slot:title>
                    Edit profile
                </x-slot:title>
                <x-slot:description>
                    Make changes to your profile here. Click save when you're done.
                </x-slot:description>
            </x-aui::sheet-header>
            <div class="grid gap-4 py-4">
                <div class="grid grid-cols-4 items-center gap-4">
                    <x-aui::label for="name-1-right" class="text-right">Name</x-aui::label>
                    <x-aui::input id="name-1-right" value="Pedro Duarte" class="col-span-3" />
                </div>
                <div class="grid grid-cols-4 items-center gap-4">
                    <x-aui::label class="text-right" for="username-1-right" class="text-right">Username</x-aui::label>
                    <x-aui::input class="col-span-3" id="username-1-right" value="@peduarte" />
                </div>
            </div>
            <x-aui::sheet-footer>
                <x-aui::button class="justify-center">Save changes</x-aui::button>
            </x-aui::sheet-footer>
        </x-slot:content>
    </x-aui::sheet>
    <x-aui::sheet dismissable>
        <x-slot:trigger>
            <x-aui::button class="w-full justify-center" variant="outline">
                Bottom
            </x-aui::button>
        </x-slot:trigger>
        <x-slot:content side="bottom">
            <x-aui::sheet-header>
                <x-slot:title>
                    Edit profile
                </x-slot:title>
                <x-slot:description>
                    Make changes to your profile here. Click save when you're done.
                </x-slot:description>
            </x-aui::sheet-header>
            <div class="grid gap-4 py-4">
                <div class="grid grid-cols-4 items-center gap-4">
                    <x-aui::label for="name-1-bottom" class="text-right">Name</x-aui::label>
                    <x-aui::input id="name-1-bottom" value="Pedro Duarte" class="col-span-3" />
                </div>
                <div class="grid grid-cols-4 items-center gap-4">
                    <x-aui::label class="text-right" for="username-1-bottom" class="text-right">Username</x-aui::label>
                    <x-aui::input class="col-span-3" id="username-1-bottom" value="@peduarte" />
                </div>
            </div>
            <x-aui::sheet-footer>
                <x-aui::button class="justify-center">Save changes</x-aui::button>
            </x-aui::sheet-footer>
        </x-slot:content>
    </x-aui::sheet>
    <x-aui::sheet dismissable>
        <x-slot:trigger>
            <x-aui::button class="w-full justify-center" variant="outline">
                Left
            </x-aui::button>
        </x-slot:trigger>
        <x-slot:content side="left">
            <x-aui::sheet-header>
                <x-slot:title>
                    Edit profile
                </x-slot:title>
                <x-slot:description>
                    Make changes to your profile here. Click save when you're done.
                </x-slot:description>
            </x-aui::sheet-header>
            <div class="grid gap-4 py-4">
                <div class="grid grid-cols-4 items-center gap-4">
                    <x-aui::label for="name-1-left" class="text-right">Name</x-aui::label>
                    <x-aui::input id="name-1-left" value="Pedro Duarte" class="col-span-3" />
                </div>
                <div class="grid grid-cols-4 items-center gap-4">
                    <x-aui::label class="text-right" for="username-1-left" class="text-right">Username</x-aui::label>
                    <x-aui::input class="col-span-3" id="username-1-left" value="@peduarte" />
                </div>
            </div>
            <x-aui::sheet-footer>
                <x-aui::button class="justify-center">Save changes</x-aui::button>
            </x-aui::sheet-footer>
        </x-slot:content>
    </x-aui::sheet>
</div>
