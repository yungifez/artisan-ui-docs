<div x-data="{value: []}" class="max-w-72">
    <x-aui::calendar
        class="rounded-md border"
        mode="range"
        :selected="['from' => now(), 'to' => now()->addDays(14)]"
        @select="
            value = []
            value['from'] = $event.detail.value.from.toISOString().split('T')[0]
            value['to'] = $event.detail.value.to.toISOString().split('T')[0]
        "
    />
    <p
        x-text="'Selected range is from '+value['from']+' to '+value['to']"
        class="my-2 break-words"
    ></p>
</div>
