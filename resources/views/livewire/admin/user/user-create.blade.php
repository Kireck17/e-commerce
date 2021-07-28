<div>
    <x-containers.secondary>
        {{--Start the form User--}}
        <x-containers.form>
            {{--Title--}}
            <x-slot name="title">
                {{ __('Registrar Nuevo Usuario') }}
            </x-slot>
            
            {{--Start the content--}}
            <x-slot name="content">
                <x-containers.formbody :bg="true">
                    {{--Name--}}
                    <x-slot name="label">
                        {{ __('Nombre') }}
                    </x-slot>
                    <x-slot name="input">
                        <x-component.input wire:model="name" class="w-full"/>
                        <x-jet-input-error for="name"/>
                    </x-slot>
                </x-containers.formbody>


                <x-containers.formbody :bg="true">
                    {{--Correo--}}
                    <x-slot name="label">
                        {{ __('Correo Electronico') }}
                    </x-slot>
                    <x-slot name="input">
                        <x-component.input wire:model="email" class="w-full"/>
                        <x-jet-input-error for="email"/>
                    </x-slot>
                </x-containers.formbody>

                <x-containers.formbody :bg="true">
                    {{--Rol--}}
                    <x-slot name="label">
                        {{ __('Seleccionar Rol') }}
                    </x-slot>
                    <x-slot name="input">
                        <x-Drop.input wire:model="role" :datos="$this->roles" :columna="'name'"/>
                        <x-jet-input-error for="role"/>
                    </x-slot>
                </x-containers.formbody>
                
                <h1 class="text-sm font-medium text-black font-extrabold">Seleccionar Permisos</h1>
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-3 mt-5" class="w-full">
                            @foreach($this->permissions as $key => $permission)
                                <label class="text-sm uppercase ">
                                    <x-forms.checkbox class="mr-3" type="checkbox" wire:model="user_permissions.{{$key}}" value="{{$permission->name}}"/>
                                    {{$permission->name}}
                                </label>
                            @endforeach  
                </div>

            </x-slot>
             {{--END the content--}}

            {{--Save--}}
            <x-slot name="save">
                <x-buttons.cian wire:click="save_user">
                    {{__('Guardar')}}
                </x-buttons.cian>
            </x-slot>
        </x-containers.form>
        {{--END the form--}}
    </x-containers.secondary>
</div>
