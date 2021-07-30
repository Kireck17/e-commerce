<div>
    <div class="text-blue-500 w-4 mr-2 transform hover:text-blue-900 hover:scale-110"
        wire:click="edit_componente()">
        <i class="fas fa-edit"></i>
    </div>
{{--Ventana Modal--}}
    <x-jet-dialog-modal wire:model="is_show">
		<x-slot name="title">  
         Editar Existencia
        </x-slot>

		<x-slot name="content">
            
            <dl>
               <div class="bg-gray-50 text-sm font-medium text-black px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        <x-adminver.label for="auts">
                            Proveedor:
                        </x-adminver.label>
                    </dt>
                        
                    <dd class="mt-1 text-sm text-black sm:mt-0 sm:col-span-2">
                        <select class="border border-gray-400 rounded-md w-full focus:outline-none px-3 
                        focus:border-blue-700 text-base text-black" wire:model="stock.provider_id" >
                        <option value="">Seleccionar..</option>
                        @foreach($this->pro as $prove)
                        <option value="{{$prove->id}}">{{$prove->name}}</option>
                        @endforeach
                        </select>
                        <x-jet-input-error for="stock.provider_id"/> 
                    </dd>
                </div>   

                <div class="bg-gray-50 text-sm text-black font-medium  px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-black">
                        <x-adminver.label for="auts">
                            Almacen:
                        </x-adminver.label>
                    </dt>
                        
                    <dd class="mt-1 text-sm text-black sm:mt-0 sm:col-span-2">
                        <select class="border border-gray-400 rounded-md w-full focus:outline-none px-3 
                        focus:border-blue-700 text-base text-black" wire:model="stock.warehouse_id" >
                        <option value="">Seleccionar..</option>
                        @foreach($this->ware as $wares)
                        <option value="{{$wares->id}}">{{$wares->name}}</option>
                        @endforeach
                        </select>
                        <x-jet-input-error for="stock.warehouse_id"/> 
                    </dd>
                </div>   

                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        <x-forms.label for="precio">
                            Cantidad:
                        </x-forms.label>
                    </dt>
                                
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <x-forms.adon-input> 
                            <x-slot name="adon">
                                <i class="fas fa-boxes"></i>
                            </x-slot>
                        <x-forms.input class="rounded-l-none" type="number" id="precio" min="0" step="0.01" wire:model.number="stock.quantity"/>
                        </x-forms.adon-input>
                        <x-jet-input-error for="stock.quantity" /> 

                                            
                    </dd>  
                </div>
                
                <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        <x-forms.label for="precio">
                            Precio:
                        </x-forms.label>
                    </dt>
                                
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        <x-forms.adon-input> 
                            <x-slot name="adon">
                                <i class="fas fa-dollar-sign"></i>
                            </x-slot>
                        <x-forms.input class="rounded-l-none" type="number" id="precio" min="0" step="0.01" wire:model.number="stock.price"/>
                        </x-forms.adon-input>
                        <x-jet-input-error for="stock.price" /> 

                                            
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

