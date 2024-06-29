<div x-data="{value: []}" class="max-w-72">
    <x-aui::calendar
        class="rounded-md border"
        mode="multiple"
        max="5"
        :selected="[now(), now()->addDays(2),  now()->addDays(14)]"
        @select="
            value = []
            $event.detail.value.forEach(
                element => value.push(element.toISOString().split('T')[0])
            )
        "
    />
    <p
        x-text="'Selected dates are '+value.toString()"
        class="my-2 break-words"
    ></p>
</div>
