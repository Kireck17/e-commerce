<div>
    <x-containers.secondary>
        <x-containers.form>
            <x-slot name="title">
                {{ __('Proveedores') }}
            </x-slot>
            @if($origins->count())
                <x-slot name="upload">
                    <x-buttons.cian>
                        {{__('Carga masiva . . .')}}
                    </x-buttons.cian>
                </x-slot>
                <x-slot name="content">
                    <x-containers.formbody>
                        <x-slot name="label">
                            {{ __('Nombre') }}
                        </x-slot>
                        <x-slot name="input">
                            <x-component.input wire:model="provider.name" class="w-full"/>
                            <x-jet-input-error for="provider.name"/>
                        </x-slot>
                    </x-containers.formbody>
                    <x-containers.formbody :bg="true">
                        <x-slot name="label">
                            {{ __('Origen') }}
                        </x-slot>
                        <x-slot name="input">
                            <x-component.select wire:model="provider.origin_id" class="w-full">
                                <x-slot name="default">
                                    {{__('--Selecciona--')}}  
                                </x-slot>
                                @foreach($origins as $origin)
                                    <option value="{{$origin->id}}">{{$origin->country}}</option>  
                                @endforeach
                            </x-component.select>
                            <x-jet-input-error for="provider.origin_id"/>
                        </x-slot>
                    </x-containers.formbody>
                </x-slot>
                <x-slot name="save">
                    <x-buttons.cian wire:click="saveProvider()">
                        {{__('Guardar')}}
                    </x-buttons.cian>
                </x-slot>
            @endif
        </x-containers.form>
            @if($origins->count() == 0)
                <span class="text-gray-300 font-bold text-center text-4xl">
                    No hay Origenes registradas 
                </span>
            @endif
    </x-containers.secondary> 
</div>
