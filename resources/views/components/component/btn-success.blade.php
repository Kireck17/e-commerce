<button 
{{$attributes->merge([
'class'=>'
    group relative w-full 
    flex justify-center 
    py-2 px-4 border 
    text-sm 
    font-medium rounded-md 
    text-white bg-tertycolor
    bg-blue-500 
    border-indigo-500
    hover:bg-blue-700
    focus:outline-none 
    focus:ring-2 
    focus:ring-offset-2 
    focus:ring-indigo-500'
    ])}}>
    {{$slot}}
</button>