<a {{$attributes->class(['transition-colors hover:underline no-underline'])}} wire:navigate
    :class="$el.getAttribute('href') == window.location.href ? 'text-foreground' : 'text-muted-foreground/80 hover:text-foreground/80'
    ">{{$slot}}</a>
