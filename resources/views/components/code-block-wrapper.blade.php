@props(['theme' => 'github-dark-default', 'language'=>'', 'title'])
<div {{$attributes->class(['my-4 relative'])}} x-data>
    <div class="absolute flex justify-between w-full top-0 p-3.5">
    @isset($title)
    <small class=" text-muted-foreground title">{{$title}}</small>
    @endisset
    <x-copy-button ::value="$refs.content.innerText" class="ml-auto self-end"></x-copy-button>
    </div>
    <x-markdown :theme="$theme" class="code-block flex-grow w-full overflow-scroll" x-ref="content">
```{!!$language!!}
{!!$slot!!}
```
    </x-markdown>
</div>
