<div>
    <div class="flex justify-between items-center border-b border-gray-200">
        <h2 class="text-sm uppercase font-bold leading-4 tracking-widest">
            {{__('Atributos')}}
        </h2>
        <x-buttons.turquoise class="my-3 mx-2" wire:click="add_attribute()">
            {{__('Agregar atributo')}}
        </x-buttons.turquoise>
    </div>
    <div class="divide-y divide-gray-900">
        @foreach($this->attribute_values as $key => $attribute_value)
            <div>
                <x-containers.formbody :bg="true">
                    <x-slot name="label">
                        {{ __('Atributo') }}
                    </x-slot>
                    <x-slot name="input">
                        <x-component.select class="w-full" wire:model="attribute_values.{{$key}}.attribute_id">
                            @foreach($this->attributes as $attribute)
                                <option value="{{$attribute->id}}">{{$attribute->type}}</option>
                            @endforeach
                        </x-component.select>
                    </x-slot>
                </x-containers.formbody>
                <x-containers.formbody :bg="true">
                    <x-slot name="label">
                        {{ __('Valor') }}
                    </x-slot>
                    <x-slot name="input">
                        <x-component.input class="w-full" wire:model="attribute_values.{{$key}}.value"/>
                    </x-slot>
                </x-containers.formbody>
                <div class="flex justify-end">
                    @if(isset($attribute_value['id']))
                        <x-buttons.red class="my-3 mx-2" wire:click="delete_attribute({{$attribute_value['id']}})">
                            {{__('Quitar atributo')}}
                        </x-buttons.red>
                    @else
                        <x-buttons.red class="my-3 mx-2" wire:click="remove_attribute({{$key}})">
                            {{__('Quitar atributo')}}
                        </x-buttons.red>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
    <div class="flex justify-end py-3 border-t border-gray-900">
        <x-buttons.cian wire:click="save_attributes()">
            {{__('Guardar atributos')}}
        </x-buttons.cian>
    </div>
</div>
