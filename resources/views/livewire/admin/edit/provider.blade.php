<div>
    @can('Editar Inventario')
    <div class="text-blue-500 w-4 mr-2 transform hover:text-blue-900 hover:scale-110"
        wire:click="edit_componente()">
        <i class="fas fa-edit"></i>
    </div>
    @endcan
{{--Ventana Modal--}}
    <x-jet-dialog-modal wire:model="is_show">
		<x-slot name="title">  
         Editar Proveedor
        </x-slot>

		<x-slot name="content">
            
            <dl>
                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">

                    <dt class="text-sm font-medium text-gray-500">
                        <x-adminver.label for="nombre">
                            Nombre del proveedor:
                        </x-adminver.label>
                    </dt>

                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <x-adminver.input type="text" id="nombre" wire:model="providder.name"/>
                        <x-jet-input-error for="providder.name"/>
                    </dd>

                </div>

                <div class="bg-gray-50 text-sm font-medium text-black px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm text-black font-medium text-gray-500">
                        <x-adminver.label for="auts">
                            Origen:
                        </x-adminver.label>
                    </dt>
                        
                    <dd class="mt-1 text-sm text-black sm:mt-0 sm:col-span-2">
                        <select class="border border-gray-400 rounded-md w-full focus:outline-none px-3 
                        focus:border-blue-700 text-base text-black" wire:model="providder.origin_id" >
                        <option value="">Seleccionar..</option>
                        @foreach($this->orig as $aut)
                        <option value="{{$aut->id}}">{{$aut->country}}</option>
                        @endforeach
                        </select>
                        <x-jet-input-error for="providder.origin_id"/> 
                    </dd>
                </div>   
            </dl>
            
            
		</x-slot>

        <x-slot name="footer">
            <x-buttons.red wire:click="cancelar()">
                {{__('Cancelar')}}
            </x-buttons.red>
            <x-buttons.cian wire:click="save_changes()">
                <i class ="far fa-save mr-3"></i>
                {{__('Guardar')}}
            </x-buttons.cian>	
	    </x-slot>
	    

	</x-jet-dialog-modal>
    {{--Fin de la ventana modal--}}
</div>
