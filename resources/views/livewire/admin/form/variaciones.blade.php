<div>
    <x-containers.secondary>
        <x-containers.form>
            <x-slot name="title">
                {{ __('Variaciones') }}
            </x-slot>
            @if($products->count() && $variations->count())
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
                            <x-component.select wire:model="variation.variation" class="w-full">
                                <x-slot name="default">
                                    {{__('--Selecciona--')}}  
                                </x-slot>
                                @foreach($variations as $variation)
                                    <option value="{{$variation->id}}">
                                        @foreach($variation->attribute_value()->get() as $attribute_value)
                                            @foreach($attribute_value->attribute()->get() as $attribute)
                                                {{$attribute->type}}|{{$attribute_value->value}}
                                            @endforeach
                                        @endforeach
                                    </option>
                                @endforeach
                            </x-component.select>
                            <x-jet-input-error for="variation.variation"/>
                        </x-slot>
                    </x-containers.formbody>
                    <x-containers.formbody>
                        <x-slot name="label">
                            {{ __('Producto') }}
                        </x-slot>
                        <x-slot name="input">
                            <x-component.select wire:model="variation.product" class="w-full">
                                <x-slot name="default">
                                    {{__('--Selecciona--')}}  
                                </x-slot>
                                @foreach($products as $product)
                                    <option value="{{$product->id}}">{{$product->name}}</option>
                                @endforeach
                            </x-component.select>
                            <x-jet-input-error for="variation.product"/>
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
            @if($products->count() == 0)
                <span class="text-gray-300 font-bold text-center text-4xl">
                    No hay Productos registrados 
                </span>
            @endif
    </x-containers.secondary> 
</div>