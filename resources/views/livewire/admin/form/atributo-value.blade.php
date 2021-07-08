<div>
    <x-containers.secondary>
        <x-containers.form>
            <x-slot name="title">
                {{ __('Valor del Atributo') }}
            </x-slot>
            
            @if($atrivute_values->count())
                <x-slot name="upload">
                    <x-buttons.cian>
                        {{__('Carga masiva . . .')}}
                    </x-buttons.cian>
                </x-slot>
                <x-slot name="content">
                    <x-containers.formbody :bg="true">
                            <x-slot name="label">
                                {{ __('Atributo') }}
                            </x-slot>
                            <x-slot name="input">
                                <x-component.select wire:model="attribute_value.attribute_id" class="w-full">
                                    <x-slot name="default">
                                        {{__('--Selecciona--')}}  
                                    </x-slot>
                                    @foreach($atrivute_values as $type)
                                        <option value="{{$type->id}}">{{$type->type}}</option>  
                                    @endforeach
                                </x-component.select>
                                <x-jet-input-error for="attribute_value.attribute_id"/>
                            </x-slot>
                    </x-containers.formbody>
                    <x-containers.formbody >
                        <x-slot name="label">
                            {{ __('Valor') }}
                        </x-slot>
                        <x-slot name="input">
                            <x-component.input wire:model="attribute_value.value" class="w-full"/>
                            <x-jet-input-error for="attribute_value.value"/>
                        </x-slot>
                    </x-containers.formbody>
                </x-slot>
                <x-slot name="save">
                    <x-buttons.cian wire:click="saveAttributeValue()">
                        {{__('Guardar')}}
                    </x-buttons.cian>
                </x-slot>
                
                
            @endif
            @if($atrivute_values->count() == 0)
                <span class="text-gray-300 font-bold text-center text-4xl">
                    No hay Attributos registrados 
                </span>
            @endif
        </x-containers.form>
    </x-containers.secondary> 
</div>
