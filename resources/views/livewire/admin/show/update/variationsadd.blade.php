<div>
    <div class="flex justify-between items-center mt-4">
        <span class="text-black font-bold text-center text-4xl">
            {{__('Agregar')}}
        </span>
        <x-buttons.turquoise wire:click="add_attribute()">
            <i class="far fa-plus-square mr-3"></i>
            {{__('Agregar')}}
        </x-buttons.turquoise>
    </div>
    @foreach($this->attributes as $key => $attribute)
        <x-containers.formbody class="border-t border-gray-300">
            <x-slot name="label">
                {{ __('Atributo') }}
            </x-slot>
            <x-slot name="input">
                <x-component.dropdown-input :datos="$atrivute_values" :columna="'type'" wire:model="attributes.{{$key}}.type">
                    <x-component.input type="text" x-model="search" wire:model="attributes.{{$key}}.type" class="w-full"/>
                    <x-jet-input-error for="attributes.{{$key}}.type"/>
                </x-component.dropdown-input>
            </x-slot>
        </x-containers.formbody>
        <x-containers.formbody>
            <x-slot name="label">
                {{ __('Valor') }}
            </x-slot>
            <x-slot name="input">
                <x-component.input type="text" class="w-full" wire:model="attributes.{{$key}}.value"/>
                <x-jet-input-error for="attributes.{{$key}}.value"/>
            </x-slot>
        </x-containers.formbody>
        <div class="py-3 flex justify-center">
            <x-buttons.red wire:click="remove_attribute()">
                {{__('Quitar característica')}}
            </x-buttons.red>
        </div>
    @endforeach
    <div class="py-3 flex justify-center">
        <x-buttons.cian wire:click="save_add_attribute()">
            {{__('Guardar')}}
        </x-buttons.cian>
    </div>
</div>
