<div>
    <x-containers.secondary>
        <x-containers.form>
            <x-slot name="title">
                {{ __('Productos') }}
            </x-slot>
            @if($trademarks->count() && $categories->count() && $subcategories->count())
                <x-slot name="upload">
                    <x-buttons.cian>
                        {{__('Carga masiva . . .')}}
                    </x-buttons.cian>
                </x-slot>
                <x-slot name="content">
                    <x-containers.formbody :bg="true">
                        <x-slot name="label">
                            {{ __('Nombre') }}
                        </x-slot>
                        <x-slot name="input">
                            <x-component.input wire:model="product.name" class="w-full"/>
                            <x-jet-input-error for="product.name"/>
                        </x-slot>
                    </x-containers.formbody>
                    <x-containers.formbody>
                        <x-slot name="label">
                            {{ __('Codigo de barras') }}
                        </x-slot>
                        <x-slot name="input">
                            <x-component.input type="number" wire:model.number="product.barcode" class="w-full"/>
                            <x-jet-input-error for="product.barcode"/>
                        </x-slot>
                    </x-containers.formbody>
                    <x-containers.formbody :bg="true">
                        <x-slot name="label">
                            {{ __('Categoria') }}
                        </x-slot>
                        <x-slot name="input">
                            <x-component.select wire:model="product.category_id" class="w-full">
                                <x-slot name="default">
                                    {{__('--Selecciona--')}}  
                                </x-slot>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </x-component.select>
                            <x-jet-input-error for="product.category_id"/>
                        </x-slot>
                    </x-containers.formbody>
                    <x-containers.formbody>
                        <x-slot name="label">
                            {{ __('Sub categoria') }}
                        </x-slot>
                        <x-slot name="input">
                            <x-component.select wire:model="product.subcategory_id" class="w-full">
                                <x-slot name="default">
                                    {{__('--Selecciona--')}}  
                                </x-slot>
                                @foreach($subcategories as $subcategory)
                                    <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                                @endforeach
                            </x-component.select>
                            <x-jet-input-error for="product.subcategory_id"/>
                        </x-slot>
                    </x-containers.formbody>
                    <x-containers.formbody :bg="true">
                        <x-slot name="label">
                            {{ __('Marca') }}
                        </x-slot>
                        <x-slot name="input">
                            <x-component.select wire:model="product.trademark_id" class="w-full">
                                <x-slot name="default">
                                    {{__('--Selecciona--')}}  
                                </x-slot>
                                @foreach($trademarks as $trademark)
                                    <option value="{{$trademark->id}}">{{$trademark->name}}</option>
                                @endforeach
                            </x-component.select>
                            <x-jet-input-error for="product.trademark_id"/>
                        </x-slot>
                    </x-containers.formbody>
                    <x-containers.formbody>
                        <x-slot name="label">
                            {{__('Descripción')}}
                        </x-slot>
                        <x-slot name="input">
                            <x-component.inputarea wire:model="product.description" class="w-full">
                            </x-component.inputarea>
                            <x-jet-input-error for="product.description"/>
                        </x-slot>
                    </x-containers.formbody>
                </x-slot>
                <x-slot name="save">
                    <x-buttons.cian wire:click="saveproduct()">
                        {{__('Guardar')}}
                    </x-buttons.cian>
                </x-slot>
            @endif
        </x-containers.form>
            @if($trademarks->count() == 0)
                <span class="text-gray-300 font-bold text-center text-4xl">
                    No hay Marcas registradas 
                </span>
            @endif
            
            @if($categories->count() == 0)
                <span class="text-gray-300 font-bold text-center text-4xl">
                    No hay Categorías registradas 
                </span>
            @endif
            @if($subcategories->count() == 0)
                <span class="text-gray-300 font-bold text-center text-4xl">
                    No hay Sub categorías registradas 
                </span>
            @endif
    </x-containers.secondary> 
</div>
