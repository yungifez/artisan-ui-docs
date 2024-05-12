```blade +parse
@if ($attributes->has('component'))
@php
$code = file_get_contents(base_path()."/resources/views/components/".str_replace('.', '/',
$attributes->get('component')).'.blade.php');
@endphp
@endif
<x-aui::tabs class="relative my-3 mr-auto w-full" defaultValue="preview">
    <x-slot:tabs-list class="w-full">
        <x-aui::tabs-trigger value="preview" class="w-full">
            Preview
        </x-aui::tabs-trigger>
        <x-aui::tabs-trigger value="code" class="w-full">
            Code
        </x-aui::tabs-trigger>
    </x-slot:tabs-list>
    <x-aui::tabs-content value="preview" class="min-h-[350px] relative rounded-md border">
        <div class="absolute top-0 right-0 p-3.5 w-full flex">
            <x-copy-button :value="$code" class="ml-auto"></x-copy-button>
        </div>
        <div class="flex w-full justify-center h-full p-10 md:p-24 items-center">
            @if ($attributes->has('component'))
            <x-dynamic-component :component="$attributes->get('component')" />
            @endif
        </div>
    </x-aui::tabs-content>
    <x-aui::tabs-content value="code">
        @if ($attributes->has('component'))
        <x-code-block-wrapper language="{{$attributes->get('title') ?? 'blade'}}"
            title="{{$attributes->get('title') ?? 'Component Code'}}" class="w-full max-h-[350px] overflow-scroll"
            style="margin-top: 0; margin-bottom: 0;">
            {!!$code!!}
        </x-code-block-wrapper>
        @endif
    </x-aui::tabs-content>
</x-aui::tabs>
```