@props(['bg'])

@php
    if(isset($bg)){
        $background = "bg-gray-50";
    }else{
        $background = "bg-white";
    }
@endphp


<div class="overflow-hidden">
    <div class="px-4 py-5 sm:px-6">
        <span class="text-black font-bold text-center text-4xl">
            {{$title}}
        </span>
    </div>
    @if(isset($upload))
        <div class="px-4 py-5 sm:px-6">
            {{$upload}}
        </div>
    @endif
    @if(isset($content))
        <div class="border-t border-gray-200">
            <dl>
                {{$content}}
            </dl>
            <div class="{{$background}} px-4 py-3 text-right sm:px-6">
            {{$save}}
            </div>
        </div>
    @endif
</div>