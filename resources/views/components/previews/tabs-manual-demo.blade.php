<x-aui::tabs defaultValue="account" activationMode="manual" class="w-[400px]">
    <x-slot:tabs-list class="w-full">
        <x-aui::tabs-trigger value="account" class="w-full">Account</x-aui::tabs-trigger>
        <x-aui::tabs-trigger value="password" class="w-full">Password</x-aui::tabs-trigger>
    </x-slot:tabs-list>
    <x-aui::tabs-content value="account">
        <x-aui::card>
            <x-slot:title>Account</x-slot:title>
            <x-slot:description>
                Make changes to your account here. Click save when you're done.
            </x-slot:description>
            <x-slot:content class="space-y-2">
                <div class="space-y-1">
                    <x-aui::label for="name">Name</x-aui::label>
                    <x-aui::input id="name" value="Pedro Duarte" class="w-full" />
                </div>
                <div class="space-y-1">
                    <x-aui::label htmlFor="username">Username</x-aui::label>
                    <x-aui::input id="username" value="@peduarte" class="w-full" />
                </div>
            </x-slot:content>
            <x-slot:footer>
                <x-aui::button>Save changes</x-aui::button>
            </x-slot:footer>
        </x-aui::card>
    </x-aui::tabs-content>
    <x-aui::tabs-content value="password">
        <x-aui::card>
            <x-slot:title>Password</x-slot:title>
            <x-slot:description>
                Change your password here. After saving, you'll be logged out.
            </x-slot:description>
            <x-slot:content class="space-y-2">
                <div class="space-y-1">
                    <x-aui::label htmlFor="current">Current password</x-aui::label>
                    <x-aui::input id="current" type="password" class="w-full" />
                </div>
                <div class="space-y-1">
                    <x-aui::label htmlFor="new">New password</x-aui::label>
                    <x-aui::input id="new" type="password" class="w-full" />
                </div>
            </x-slot:content>
            <x-slot:footer>
                <x-aui::button>Save password</x-aui::button>
            </x-slot:footer>
        </x-aui::card>
    </x-aui::tabs-content>
</x-aui::tabs>
