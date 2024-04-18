@props(['theme' => 'github-dark-default', 'language'=>'', 'title'])
<div class="my-4 top-4 flex relative" x-data>
    @isset($title)
    <small class="absolute left-5 top-2 text-muted-foreground title">{{$title}}</small>
    @endisset
    <x-markdown :theme="$theme" class="code-block flex-grow overflow-scroll" x-ref="content">
```{!!$language!!}
{!!$slot!!}
```
    </x-markdown>
    <x-copy-button ::value="$refs.content.innerText" class="absolute right-8 top-4"></x-copy-button>
</div>
