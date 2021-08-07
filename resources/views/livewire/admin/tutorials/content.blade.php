<div>
    {{--Form Variation--}}
    <x-containers.secondary class="bg-transparent shadow-none">
        <x-containers.form>
            {{--Header--}}
            <x-slot name="title">
                {{ __('Pasos') }}
            </x-slot>
            {{--Form--}}
            <x-slot name="content">
               
                    <div class="rounded-md border-4 border-double border-gray-500 p-1 mt-4">
                        <div class="flex justify-between items-center h-12">
                            <div class="w-6/12 h-full py-3 px-3 border-l-4 border-gray-500 flex items-center">
                                <h2 class="text-sm uppercase font-bold leading-4 tracking-widest">
                                    {
                                </h2>
                            </div>
                            <div class="w-3/12 h-full flex justify-around py-2">
                                <x-buttons.default wire:click="">
                                    <i class="far fa-plus-square"></i>
                                </x-buttons.default>
                                <x-buttons.red wire:click="">
                                    <i class="fas fa-trash-alt"></i>
                                </x-buttons.red>
                            </div>
                        </div>
                        <div class="mt-3 py-3 px-2 border-t border-gray-500">
                        </div>
                    </div>
                
            </x-slot>
        </x-containers.form>
    </x-containers.secondary>
    {{--End of the Form--}}
</div>
