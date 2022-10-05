@props(['name', 'kor'])

<x-form.field>
    <x-form.label name="{{$name}}"  kor="{{$kor}}" />

    <input class="border border-gray-200 p-2 w-full rounded"
        style="width:500px;"
        name="{{$name}}"
        id="{{$name}}"
        {{$attributes(['value'=>old($name)])}}
    >

</x-form.field>
