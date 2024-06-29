<div>
    <p>Disable the worst day of the week</p>
    <x-aui::calendar
        class="rounded-md border"
        mode="single"
        :disabled="['dayOfWeek' => 1]"
    />
</div>
