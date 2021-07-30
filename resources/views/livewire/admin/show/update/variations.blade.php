<div>
    @if(count($this->attribute_values) == 0)
        <div class="flex justify-center py-3">
            <x-buttons.default class="flex justify-center" wire:click="add_attribute()">
                {{__('Comienza a agregar attributos')}}
            </x-buttons.default>
        </div>
    @endif
    @foreach($this->attribute_values as $key => $attribute_value)
        <div class="flex justify-between items-center">
            <div class="w-full py-1 px-12 border-r-4 border-gray-500 flex items-center justify-end text-lg font-bold">
                {{ __('Herramientas') }}
            </div>
        </div>
        <div class="flex justify-between items-center">
            <div class="w-7/12">
                <div class="grid grid-cols-2 gap-3">
                    <label class="text-lg font-bold">
                        {{ __('Atributo') }}
                    </label>
                    <label class="text-lg font-bold">
                        {{ __('Valor') }}
                    </label>
                </div>
                <div class="grid grid-cols-2 gap-3">
                    <x-component.select class="w-full" wire:model="attribute_values.{{$key}}.attribute_id">
                        @foreach($this->attributes as $attribute)
                            <option value="{{$attribute->id}}">{{$attribute->type}}</option>
                        @endforeach
                    </x-component.select>
                    <x-component.input class="w-full" wire:model="attribute_values.{{$key}}.value"/>
                </div>
            </div>
            <div class="w-2/12 flex justify-between items-center">
                <x-buttons.default class="w-10 flex justify-center" wire:click="add_attribute()">
                    <i class="far fa-plus-square"></i>
                </x-buttons.default>
                @if(isset($attribute_value['id']))
                    <x-buttons.red class="w-10 flex justify-center" wire:click="delete_attribute({{$attribute_value['id']}})">
                        <i class="fas fa-trash-alt"></i>
                    </x-buttons.red>
                @else
                    <x-buttons.red wire:click="remove_attribute({{$key}})">
                        <i class="fas fa-trash-alt"></i>
                    </x-buttons.red>
                @endif
            </div>
        </div>
    @endforeach
    <div class="flex justify-center py-3">
        <x-buttons.cian wire:click="save_attributes()">
            {{__('Guardar atributos de la variación')}}&nbsp;
            {{$this->variation->id}}
        </x-buttons.cian>
    </div>
</div>
