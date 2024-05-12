@php
$prefix = '/docs/0.x';
$links = [
['type' => 'header' , 'text' => 'Getting Started'],
['href' => $prefix.'/' , 'text' => 'introduction'],
['href' => $prefix.'/installation', 'text' => 'installation'],
['href' => $prefix.'/theming', 'text' => 'theming'],
['type' => 'header' , 'text' => 'Components'],
['href' => $prefix.'/components/accordion', 'text' => 'Accordion'],
];
@endphp
<x-layout :title="$title ?? null">
    <div
        class="container flex-1 items-start md:grid md:grid-cols-[220px_minmax(0,1fr)] md:gap-6 lg:grid-cols-[240px_minmax(0,1fr)] lg:gap-10">
        <aside class="fixed top-14  hidden h-[calc(100vh-3.5rem)] w-full shrink-0 md:sticky md:block">
            <div class="relative overflow-hidden h-full pr-6 py-2">
                @foreach ($links as $link)
                @if (isset($link['type']) && $link['type'] == 'header')
                <h4 class="mb-3 mt-6 rounded-md text-sm font-semibold">{{$link['text']}}</h4>
                @else
                <x-link class="mb-3 block text-sm capitalize" href="{{url($link['href'])}}">{{$link['text']}}</x-link>
                @endif
                @endforeach
            </div>
        </aside>
        <main class="relative py-6 lg:gap-10 lg:py-8 xl:grid xl:grid-cols-[1fr_300px]">
            <div class="space-y-2">
                @isset($title)
                <h1 class="scroll-m-20 text-4xl font-bold tracking-tight">
                    {{$title}}
                </h1>
                @endisset
                @isset($description)
                <p class="text-lg text-muted-foreground">
                    {{$description}}
                </p>
                @endisset
            </div>
            {!!$slot!!}
        </main>
    </div>
</x-layout>
