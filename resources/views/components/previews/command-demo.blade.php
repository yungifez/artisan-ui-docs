<x-aui::command class="rounded-lg border shadow-md w-[450px] m-auto">
    <x-slot:input placeholder="Type a command or search..."></x-slot:input>
    <x-slot:empty>No results found.</x-slot:empty>
    <x-slot:list>
        <x-aui::command-group heading="Suggestions">
            <x-aui::command-item>
                <i class="fa-regular fa-calendar"></i>
                <span>Calendar</span>
            </x-aui::command-item>
            <x-aui::command-item>
                <i class="fa-regular fa-smile"></i>
                <span>Search Emoji</span>
            </x-aui::command-item>
            <x-aui::command-item disabled>
                <i class="fa-calculator fa-smile"></i>
                <span>Calculator</span>
            </x-aui::command-item>

        </x-aui::command-group>
        <x-aui::command-seperator />
        <x-aui::command-group heading="Settings">
            <x-aui::command-item>
                <i class="fa-regular fa-user"></i>
                <span>Profile</span>
                <x-aui::command-shortcut>⌘P</x-aui::command-shortcut>
            </x-aui::command-item>
            <x-aui::command-item>
                <i class="fa-regular fa-credit-card"></i>
                <span>Billing</span>
                <x-aui::command-shortcut>⌘B</x-aui::command-shortcut>
            </x-aui::command-item>
            <x-aui::command-item>
                <i class="fa fa-cogs"></i>
                <span>Settings</span>
                <x-aui::command-shortcut>⌘S</x-aui::command-shortcut>
            </x-aui::command-item>
        </x-aui::command-group>
    </x-slot:list>
</x-aui::command>
