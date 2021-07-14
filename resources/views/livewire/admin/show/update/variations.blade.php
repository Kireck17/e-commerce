<div>
    @foreach($this->attribute_values as $key => $attribute_value)
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
    @endforeach
    <div class="flex justify-end py-3">
        <x-buttons.cian wire:click="save_variations()" class="bg-blue-500">
            {{__('Guardar variación')}}
        </x-buttons.cian>
    </div>
</div>
