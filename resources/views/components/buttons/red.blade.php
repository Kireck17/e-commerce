<button {{$attributes->merge(['class' => 'inline-flex items-center px-4 py-2 bg-red-500 rounded-md font-semibold text-sm text-white tracking-widest shadow-sm focus:outline-none hover:bg-red-600 focus:bg-red-600 transition ease-in-out duration-150'])}}>
	{{$slot}}
</button>