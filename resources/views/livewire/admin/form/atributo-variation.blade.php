<div>
    <x-containers.secondary>
        <x-containers.form>
            <x-slot name="title">
                {{ __('Atributo de Variaciones') }}
            </x-slot>
            @if($attribute_values->count() && $variations->count())
                <x-slot name="upload">
                    <x-buttons.cian>
                        {{__('Carga masiva . . .')}}
                    </x-buttons.cian>
                </x-slot>
                <x-slot name="content">
                    <x-containers.formbody :bg="true">
                        <x-slot name="label">
                            {{ __('Variación') }}
                        </x-slot>
                        <x-slot name="input">
                            <x-component.select wire:model="atribute_variation.variation" class="w-full">
                                <x-slot name="default">
                                    {{__('--Selecciona--')}}  
                                </x-slot>
                                @foreach($variations as $variation)
                                    <option value="{{$variation->id}}">
                                       {{$variation->id}}
                                    </option>
                                @endforeach
                            </x-component.select>
                            <x-jet-input-error for="atribute_variation.variation"/>
                        </x-slot>
                    </x-containers.formbody>
                    <x-containers.formbody>
                        <x-slot name="label">
                            {{ __('Valor del Atributo') }}
                        </x-slot>
                        <x-slot name="input">
                            <x-component.select wire:model="atribute_variation.attribute" class="w-full">
                                <x-slot name="default">
                                    {{__('--Selecciona--')}}  
                                </x-slot>
                                @foreach($attribute_values as $values)
                                    <option value="{{$values->id}}">{{$values->value}}</option>
                                @endforeach
                            </x-component.select>
                            <x-jet-input-error for="atribute_variation.attribute"/>
                        </x-slot>
                    </x-containers.formbody>     
                </x-slot>
                <x-slot name="save">
                    <x-buttons.cian wire:click="saveVariation()">
                        {{__('Guardar')}}
                    </x-buttons.cian>
                </x-slot>
            @endif
        </x-containers.form>
            @if($variations->count() == 0)
                <span class="text-gray-300 font-bold text-center text-4xl">
                    No hay Variaciones registrados
                </span>
            @endif
            @if($attribute_values->count() == 0)
                <span class="text-gray-300 font-bold text-center text-4xl">
                    No hay Productos registrados 
                </span>
            @endif
    </x-containers.secondary> 
</div>