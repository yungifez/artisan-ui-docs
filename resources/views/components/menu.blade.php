<div x-persist="menu" class="relative overflow-y-scroll md:max-h-[calc(100vh-3.5rem)] pr-6 py-2" wire:scroll>
    @foreach ($links as $link)
    @if (isset($link['type']) && $link['type'] == 'header')
    <h4 class="mb-3 mt-6 rounded-md text-sm font-semibold">{{$link['text']}}</h4>
    @else
    <x-link wire:current.exact="text-foreground! !hover:text-foreground"
        class=" mb-3 block text-sm capitalize text-muted-foreground hover:text-foreground/80"
        href="{{url($link['href'])}}">{{$link['text']}}</x-link>
    @endif
    @endforeach
</div>
