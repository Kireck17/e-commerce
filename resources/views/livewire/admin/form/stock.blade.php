<div>
    <x-containers.secondary>
        <x-containers.form>
            <x-slot name="title">
                {{ __('Existencias') }}
            </x-slot>
            @if($warehouses->count() && $variations->count())
                <x-slot name="upload">
                    <x-buttons.cian>
                        {{__('Carga masiva . . .')}}
                    </x-buttons.cian>
                </x-slot>
                <x-slot name="content">
                    <x-containers.formbody :bg="true">
                        <x-slot name="label">
                            {{ __('Producto') }}
                        </x-slot>
                        <x-slot name="input">
                            <x-component.dropdown-input :datos="$products" :columna="'name'" wire:model="product">
                                <x-component.input type="text" x-model="search" wire:model="product" class="w-full"/>
                                <x-jet-input-error for="product"/>
                            </x-component.dropdown-input>
                        </x-slot>
                    </x-containers.formbody>
                    <x-containers.formbody :bg="true">
                        <x-slot name="label">
                            {{ __('Variaciones') }}
                        </x-slot>
                        <x-slot name="input">
                            <x-component.select wire:model="stock.variation" class="w-full">
                                <x-slot name="default">
                                    {{__('--Selecciona--')}}  
                                </x-slot>
                                @foreach($variaciones as $variacion)
                                    <option value="{{$variacion->id}}">
                                        @foreach($variacion->attribute_value()->get() as $valor)
                                            {{$valor->attribute()->first()->type}}:&nbsp;
                                            {{$valor->value}}
                                        @endforeach
                                    </option>
                                @endforeach
                            </x-component.select>
                            <x-jet-input-error for="stock.variation"/>
                        </x-slot>
                    </x-containers.formbody>
                    <x-containers.formbody :bg="true">
                        <x-slot name="label">
                            {{ __('Almacen') }}
                        </x-slot>
                        <x-slot name="input">
                            <x-component.select wire:model="stock.warehouse_id" class="w-full">
                                <x-slot name="default">
                                    {{__('--Selecciona--')}}  
                                </x-slot>
                                @foreach($warehouses as $warehouse)
                                    <option value="{{$warehouse->id}}">{{$warehouse->name}}</option>
                                @endforeach
                            </x-component.select>
                            <x-jet-input-error for="stock.warehouse_id"/>
                        </x-slot>
                    </x-containers.formbody>
                    <x-containers.formbody :bg="true">
                    
                        <x-slot name="label">
                            {{ __('Cantidad') }}
                        </x-slot>
                        <x-slot name="input">
                            <x-component.input type="number" min="0"  wire:model.number="stock.quantity" class="w-full"/>
                            <x-jet-input-error for="stock.quantity"/>
                        </x-slot>
                    </x-containers.formbody>
                    <x-containers.formbody :bg="true">
                        <x-slot name="label">
                            {{ __('Precio') }}
                        </x-slot>
                        <x-slot name="input">
                            <x-component.input type="number" step="10" wire:model.number="stock.price" class="w-full"/>
                            <x-jet-input-error for="stock.price"/>
                        </x-slot>
                    </x-containers.formbody>
                    
                </x-slot>
                <x-slot name="save">
                    <x-buttons.cian wire:click="saveStock()">
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
            @if($warehouses->count() == 0)
                <span class="text-gray-300 font-bold text-center text-4xl">
                    No hay Almacenes registrados 
                </span>
            @endif  
    </x-containers.secondary> 
</div>
