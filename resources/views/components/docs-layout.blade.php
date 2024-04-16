@php
    $version = '0.x';
    $links = [
    ['href' => '/docs/'.$version.'/' , 'text' => 'introduction'],
    ['href' =>  '/docs/'.$version.'/installation', 'text' => 'installation'],
   ];
@endphp
<x-layout>
    <div
        class="container flex-1 items-start md:grid md:grid-cols-[220px_minmax(0,1fr)] md:gap-6 lg:grid-cols-[240px_minmax(0,1fr)] lg:gap-10">
        <aside class="fixed top-14 -ml-2 hidden h-[calc(100vh-3.5rem)] w-full shrink-0 md:sticky md:block">
            <div class="relative overflow-hidden h-full py-6 pr-6 lg:py-8">
                @foreach ($links as $link)
                    @if (isset($link['type']) && $link['type'] == 'header')
                        <h4 class="mb-1 rounded-md px-2 py-1 text-sm font-semibold">{{$link['text']}}</h4>
                    @endif
                    <x-link class="my-2 block" href="{{url($link['href'])}}">{{$link['text']}}</x-link>
                @endforeach
            </div>
        </aside>
        <main class="relative py-6 lg:gap-10 lg:py-8 xl:grid xl:grid-cols-[1fr_300px]">
            {{$slot}}
        </main>
    </div>
</x-layout>
