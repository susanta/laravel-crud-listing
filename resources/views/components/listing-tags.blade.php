@props(['tagsCSV'])

@php
$tags = explode(',', $tagsCSV);
@endphp

<ul class="flex flex-wrap">
    @foreach ($tags as $tag)
    <li class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mt-2 mr-2 text-xs">
        <a href="/?tag={{trim($tag)}}">{{trim($tag)}}</a>
    </li>
    @endforeach
</ul>