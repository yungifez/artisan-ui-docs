<div class="relative overflow-hidden h-full pr-6 py-2">
    @foreach ($links as $link)
    @if (isset($link['type']) && $link['type'] == 'header')
    <h4 class="mb-3 mt-6 rounded-md text-sm font-semibold">{{$link['text']}}</h4>
    @else
    <x-link
        ::class="$el.getAttribute('href') == window.location.href ? 'text-foreground' : 'text-muted-foreground hover:text-foreground/80'"
        class=" mb-3 block text-sm capitalize" href="{{url($link['href'])}}">{{$link['text']}}</x-link>
    @endif
    @endforeach
</div>
