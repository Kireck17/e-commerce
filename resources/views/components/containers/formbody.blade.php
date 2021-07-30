@props(['bg'])

@php
    if(isset($bg)){
        $background = "bg-gray-50";
    }else{
        $background = "bg-white";
    }
@endphp


<div {{$attributes->merge(['class' => $background."px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6"])}}>
    <dt class="text-sm font-medium text-gray-500">
        {{$label}}
    </dt>
    <dd class="mt-1 text-sm text-gray-900 text-center sm:mt-0 sm:col-span-2">
        {{$input}}
    </dd>
</div>