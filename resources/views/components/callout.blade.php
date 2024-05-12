```blade +parse
<x-aui::alert>
    @isset($title)
    <x-slot:title {{$title->attributes}}>{{$title}}</x-slot:title>
    @endisset
    <x-slot:description {{$attributes}}>
        <x-markdown>
            {{$slot}}
        </x-markdown>
    </x-slot:description>
</x-aui::alert>
```
