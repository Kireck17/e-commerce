<div>
    <div class="text-red-500 hover:text-red-700 w-4 mr-2 transform hover:scale-110"
    wire:click="open_modal()">
        <i class="fas fa-trash-alt"></i>
    </div>
{{--Ventana Modal de marca--}}
    <x-modal.confirmation wire:model="is_show">
		<x-slot name="title">  
        </x-slot>
		<x-slot name="content">
            <div class="flex items-center justify-center content-center">
                <i class="fas fa-exclamation-triangle text-7xl text-yellow-500"></i>
            </div>
            <div class="flex flex-col items-center justify-center">
                <h1 class="p-4 text-lg font-bold">
                    ¿DESEA ELIMINAR LA  MARCA {{$this->trademark->name}}?
                </h1>
            </div>
		</x-slot>
        <x-slot name="footer">
            <x-buttons.turquoise wire:click="remove()">
                {{__('Eliminar')}}
            </x-buttons.turquoise>
            <x-buttons.red @Click="show = !show">
                {{__('Cancelar')}}
            </x-buttons.red>
	    </x-slot>
	</x-modal.confirmation>
    {{--Fin de la ventana modal--}}
</div>
