<div x-data="{value: null}" class="max-w-72">
    <x-aui::calendar
        class="rounded-md border"
        mode="single"
        :selected="now()"
        @select="value = $event.detail.value.toISOString().split('T')[0]"
    />
    <p x-text="value ? 'Selected date is '+value : 'No Date Is Selected' " class="my-2 w-full"></p>
</div>
