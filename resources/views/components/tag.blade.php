@props(['tag', 'size' => 'base'])
@php
    $classes = "bg-white/10 hover:bg-white/25 rounded-full transition-colors duration-200 font-bold";
    if($size === 'small'){
        $classes .= ' text-2xs px-3 py-1';
    }elseif ($size === 'base'){
        $classes .= ' text-sm px-5 py-1';
    }
@endphp

<a class="{{$classes}}"
   href="/tags/{{strtolower($tag->id)}}">
    {{$tag->name}}
</a>
