<div>
    <div class="cursor-pointer text-blue-500 hover:text-blue-700 w-4 mr-2 transform hover:scale-110"
    wire:click="show_modal">
        <i class="fas fa-edit"></i>
    </div>
{{--Ventana Modal Edit Usuario--}}
    <x-modal.main wire:model="show">
		<x-slot name="title">  
        Cambiar Permisos
        </x-slot>

		<x-slot name="content">
                <x-containers.formbody :bg="true">
                            {{--Rol--}}
                    <x-slot name="label">
                        @can('Cambiar Roles')
                            {{ __('Seleccionar Rol') }}
                        @endcan
                    </x-slot>
                    
                    <x-slot name="input">
                        @can('Cambiar Roles')
                            <x-Drop.input wire:model="role" :datos="$this->roles" :columna="'name'"/>
                            <x-jet-input-error for="role"/>
                        @endcan
                    </x-slot>
                    
                </x-containers.formbody>
                @can('Cambiar Permisos')
                    <h1 class="text-sm font-medium text-black font-extrabold">
                        Seleccionar Permisos
                    </h1>
                
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 mt-5 w-full">
                        @foreach($this->permissions as $key => $permission)
                        <label class="text-sm uppercase ">
                            <x-forms.checkbox class="mr-3" type="checkbox" wire:model="user_permissions.{{$key}}" value="{{$permission->name}}"/>
                            {{$permission->name}}
                        </label>
                        @endforeach  
                    </div>
                @endcan
		</x-slot>

        <x-slot name="footer">
            <x-buttons.red @click="show = !show">
                {{__('Cancelar')}}
            </x-buttons.red>
            <x-buttons.cian wire:click="save_permission">
                <i class ="far fa-save mr-3"></i>
                {{__('Guardar')}}
            </x-buttons.cian>	
	    </x-slot>
	    

	</x-modals.mainl>
    {{--Fin de la ventana modal--}}
</div>
