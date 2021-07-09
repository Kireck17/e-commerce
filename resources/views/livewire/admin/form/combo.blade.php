<div>
    <div class="my-3 border-t border-gray-200">
        <x-containers.formbody>
            <x-slot name="label">
                {{ __('Producto') }}
            </x-slot>
            <x-slot name="input">
                <x-component.dropdown-input :datos="$products" :columna="'name'" wire:model="product">
                    <x-component.input type="text" x-model="search" wire:model="product" class="w-full" wire:change="agregar()"/>
                    <x-jet-input-error for="product"/>
                </x-component.dropdown-input>
            </x-slot>
        </x-containers.formbody>
        <x-containers.formbody>
            <x-slot name="label">
                {{ __('Variacion') }}
            </x-slot>
            <x-slot name="input">
                <x-component.select wire:model="variation_id" class="w-full" wire:change="agregar()">
                    <x-slot name="default">
                        {{__('--Selecciona--')}}
                    </x-slot>
                    @foreach($variations as $variation)
                        <option value="{{$variation->id}}">
                            {{$variation->attribute_value()->first()->attribute()->first()->type}}:&nbsp;
                            {{$variation->attribute_value()->first()->value}}
                        </option>
                    @endforeach
                </x-component.select>
            </x-slot>
        </x-containers.formbody>
        <x-containers.formbody>
            <x-slot name="label">
                {{ __('Cantidad') }}
            </x-slot>
            <x-slot name="input">
                <x-component.input type="number" min="0" wire:model="quantity" class="w-full" wire:change="agregar()"/>
            </x-slot>
        </x-containers.formbody>
    </div>
</div>
