<a {{$attributes->class(['transition-colors hover:text-foreground/80 ', 'text-foreground/60' =>
    !$attributes->has('active'), 'text-foreground' => $attributes->has('active')])}} wire:navigate>{{$slot}}</a>
