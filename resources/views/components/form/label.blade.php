@props(['name', 'kor'])

<label class="block mb-2 uppercase font-bold text-xs text-gray-700"
for="{{$name}}"
>
    {{ucwords($kor)}}
</label>
