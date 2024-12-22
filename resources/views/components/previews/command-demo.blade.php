<x-aui::command class="rounded-lg border shadow-md w-[450px] m-auto">
    <x-slot:input placeholder="Type a command or search..."></x-slot:input>
    <x-slot:empty>No results found.</x-slot:empty>
    <x-slot:list>
        <x-aui::command-group heading="Suggestions">
            <x-aui::command-item>
                <span>Calendar</span>
            </x-aui::command-item>
            <x-aui::command-item>
                <span>Search Emoji</span>
            </x-aui::command-item>
            <x-aui::command-item disabled>
                <span>Calculator</span>
            </x-aui::command-item>

            <x-aui::command-item>
                <span>Calendar</span>
            </x-aui::command-item>
            <x-aui::command-item>
                <span>Search Emoji</span>
            </x-aui::command-item>
            <x-aui::command-item disabled>
                <span>Calculator</span>
            </x-aui::command-item>

        </x-aui::command-group>
        <x-aui::command-seperator />
        <x-aui::command-group heading="Settings">
            <x-aui::command-item>
                <span>Profile</span>
                <x-aui::command-shortcut>⌘P</x-aui::command-shortcut>
            </x-aui::command-item>
            <x-aui::command-item>
                <span>Billing</span>
                <x-aui::command-shortcut>⌘B</x-aui::command-shortcut>
            </x-aui::command-item>
            <x-aui::command-item>
                <span>Settings</span>
                <x-aui::command-shortcut>⌘S</x-aui::command-shortcut>
            </x-aui::command-item>
        </x-aui::command-group>
    </x-slot:list>
</x-aui::command>
