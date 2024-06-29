<x-aui::calendar
    class="rounded-md border"
    mode="single"
    :disabled="['before' => now(), 'after' => now()->addDays(10)]"
/>
