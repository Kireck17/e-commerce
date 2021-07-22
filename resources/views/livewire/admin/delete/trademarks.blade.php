<div>
    <div class="text-red-500 hover:text-red-700 w-4 mr-2 transform hover:scale-110"
    wire:click="open_modal()">
        <i class="fas fa-trash-alt"></i>
    </div>
{{--Ventana Modal de marca--}}
    <x-jet-dialog-modal wire:model="is_show">
		<x-slot name="title">  
         
        </x-slot>

		<x-slot name="content">
            <div class="flex items-center justify-center content-center">
                <img class="h-16" src="{{ asset('storage/logos/2.png') }}" alt="">
            </div>
            <div class="items-center justify-center">
                
                
                <h1 class="p-4 text-lg font-bold">
                    ¿DESEA ELIMINAR LA  MARCA {{$trademark->name}}?
                </h1>
                
                
                <x-buttons.red wire:click="remove()">
                        {{__('Si, Eliminar')}}
                </x-buttons.red>
                <x-buttons.cian @Click="show = !show">
                    <i class ="far fa-save mr-3"></i>
                        {{__('Cancelar')}}
                </x-buttons.cian>
            </div>
            

		</x-slot>

        <x-slot name="footer">
            
	    </x-slot>
	    

	</x-jet-dialog-modal>
    {{--Fin de la ventana modal--}}
</div>
