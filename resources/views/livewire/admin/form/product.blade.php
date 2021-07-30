<div>
    <x-containers.secondary>
        {{--Start the form--}}
        <x-containers.form>
            {{--Title--}}
            <x-slot name="title">
                {{ __('Productos') }}
            </x-slot>
            {{--Conditions--}}
            @if($trademarks->count() && $categories->count() && $subcategories->count())
                {{--Upload--}}
                <x-slot name="upload">
                    <livewire:admin.upload.products/>
                </x-slot>
                {{--Start the content--}}
                <x-slot name="content">
                    {{--Name--}}
                    <x-containers.formbody :bg="true">
                        <x-slot name="label">
                            {{ __('Nombre') }}
                        </x-slot>
                        <x-slot name="input">
                            <x-component.input wire:model="product.name" class="w-full"/>
                            <x-jet-input-error for="product.name"/>
                        </x-slot>
                    </x-containers.formbody>
                     {{--Barcode--}}
                    <x-containers.formbody>
                        <x-slot name="label">
                            {{ __('Codigo de barras') }}
                        </x-slot>
                        <x-slot name="input">
                            <x-component.input type="number" wire:model.number="product.barcode" class="w-full"/>
                            <x-jet-input-error for="product.barcode"/>
                        </x-slot>
                    </x-containers.formbody>
                    {{--Category--}}
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
                    {{--Sub Category--}}
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
                    {{--Trademark--}}
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
                    {{--Description--}}
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
                    {{--Variations--}}
                    <div class="flex justify-between items-center">
                        <span class="text-black font-bold text-center text-4xl">
                            {{__('Características')}}
                        </span>
                        <x-buttons.turquoise wire:click="add_attribute()">
                            <i class="far fa-plus-square mr-3"></i>
                            {{__('Agregar')}}
                        </x-buttons.turquoise>
                    </div>
                    {{--Variations add--}}
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
                            <x-buttons.red>
                                {{__('Quitar característica')}}
                            </x-buttons.red>
                        </div>
                    @endforeach
                </x-slot>
                {{--END the content--}}
                
                {{--Save--}}
                <x-slot name="save">
                    <x-buttons.cian wire:click="saveproduct()">
                        {{__('Guardar')}}
                    </x-buttons.cian>
                </x-slot>
            @endif
        </x-containers.form>
        {{--END the form--}}

        {{--STATE CONDITIONS--}}    
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
