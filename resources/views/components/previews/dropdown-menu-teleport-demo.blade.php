{{--Font Awesome Icons used in example--}}
<x-aui::dropdown-menu x-teleport="body">
    <x-slot:trigger>
        <x-aui::button variant="outline">
            Open
        </x-aui::button>
    </x-slot:trigger>
    <x-slot:content class="w-56">
        <x-aui::dropdown-menu-label>
            My Account
        </x-aui::dropdown-menu-label>
        <x-aui::dropdown-menu-separator />
        <x-aui::dropdown-menu-item>
            <i class="fas fa-user mr-2 h-4 w-4"></i>
            <span>Profile</span>
            <x-aui::dropdown-menu-shortcut>⇧⌘P</x-aui::dropdown-menu-shortcut>
        </x-aui::dropdown-menu-item>
        <x-aui::dropdown-menu-item>
            <i class="fas fa-credit-card mr-2 h-4 w-4"></i>
            <span>Billing</span>
            <x-aui::dropdown-menu-shortcut>⌘B</x-aui::dropdown-menu-shortcut>
        </x-aui::dropdown-menu-item>
        <x-aui::dropdown-menu-item>
            <i class="fas fa-cog mr-2 h-4 w-4"></i>
            <span>Settings</span>
            <x-aui::dropdown-menu-shortcut>⌘S</x-aui::dropdown-menu-shortcut>
        </x-aui::dropdown-menu-item>
        <x-aui::dropdown-menu-item>
            <i class="fas fa-keyboard mr-2 h-4 w-4"></i>
            <span>Keyboard Shortcuts</span>
            <x-aui::dropdown-menu-shortcut>⌘B</x-aui::dropdown-menu-shortcut>
        </x-aui::dropdown-menu-item>
        <x-aui::dropdown-menu-separator />
        <x-aui::dropdown-menu-item>
            <i class="fas fa-users mr-2 h-4 w-4"></i>
            <span>Team</span>
        </x-aui::dropdown-menu-item>
        <x-aui::dropdown-menu-sub>
            <x-slot:trigger>
                <i class="fas fa-user-plus mr-2 h-4 w-4"></i>
                <span>Invite User</span>
            </x-slot:trigger>
            <x-slot:content>
                <x-aui::dropdown-menu-item>
                    <i class="fas fa-envelope mr-2 h-4 w-4"></i>
                    <span>Email</span>
                </x-aui::dropdown-menu-item>
                <x-aui::dropdown-menu-item>
                    <i class="fas fa-message mr-2 h-4 w-4"></i>
                    <span>Message</span>
                </x-aui::dropdown-menu-item>
                <x-aui::dropdown-menu-separator />
                <x-aui::dropdown-menu-item>
                    <i class="fas fa-plus-circle mr-2 h-4 w-4"></i>
                    <span>More...</span>
                </x-aui::dropdown-menu-item>
            </x-slot:content>
        </x-aui::dropdown-menu-sub>
        <x-aui::dropdown-menu-item>
            <i class="fas fa-plus mr-2 h-4 w-4"></i>
            <span>New Team</span>
        </x-aui::dropdown-menu-item>
        <x-aui::dropdown-menu-separator />
        <x-aui::dropdown-menu-item>
            <i class="fa-brands fa-github mr-2 h-4 w-4"></i>
            <span>Github</span>
        </x-aui::dropdown-menu-item>
        <x-aui::dropdown-menu-item>
            <i class="fa fa-life-ring mr-2 h-4 w-4"></i>
            <span>Support</span>
        </x-aui::dropdown-menu-item>
        <x-aui::dropdown-menu-item disabled>
            <i class="fa fa-cloud mr-2 h-4 w-4"></i>
            <span>API</span>
        </x-aui::dropdown-menu-item>
        <x-aui::dropdown-menu-item>
            <i class="fas fa-right-from-bracket mr-2 h-4 w-4"></i>
            <span>Log out</span>
        </x-aui::dropdown-menu-item>
    </x-slot:content>
</x-aui::dropdown-menu>
