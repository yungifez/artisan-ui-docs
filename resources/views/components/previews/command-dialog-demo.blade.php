<div x-data="{showDialog: false}">
    <p @keydown.window.ctrl.j.prevent="showDialog = true" class="text-sm text-muted-foreground">
        Press
        <kbd
            class="pointer-events-none inline-flex h-5 select-none items-center gap-1 rounded border bg-muted px-1.5 font-mono text-[10px] font-medium text-muted-foreground opacity-100">
            <span class="text-xs">⌘</span>J
        </kbd>
    </p>
    <x-aui::command-dialog x-teleport="body" x-model="showDialog">
        <x-aui::command>
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
    </x-aui::command-dialog>
</div>
