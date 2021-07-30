<div>
    {{--Form Product--}}
    <x-containers.secondary class="bg-transparent shadow-none">
        {{--Start of the Form--}}
        <x-containers.form>
            {{--Header--}}
            <x-slot name="title">
                {{ __('Editando producto') }}
            </x-slot>
            {{--Form--}}
            <x-slot name="content">
                {{--Name--}}
                <x-containers.formbody>
                    <x-slot name="label">
                        {{ __('Nombre') }}
                    </x-slot>
                    <x-slot name="input">
                        <x-component.input wire:model="product.name" class="w-full"/>
                    </x-slot>
                </x-containers.formbody>
                {{--Barcode--}}
                <x-containers.formbody :bg="true">
                    <x-slot name="label">
                        {{ __('Codigo de barras') }}
                    </x-slot>
                    <x-slot name="input">
                        <x-component.input type="number" min="0" wire:model.number="product.barcode" class="w-full"/>
                    </x-slot>
                </x-containers.formbody>
                {{--Trademarks--}}
                <x-containers.formbody>
                    <x-slot name="label">
                        {{ __('Marcas') }}
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
                    </x-slot>
                </x-containers.formbody>
                {{--Category--}}
                <x-containers.formbody :bg="true">
                    <x-slot name="label">
                        {{ __('Categoría') }}
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
                    </x-slot>
                </x-containers.formbody>
                {{--Sub Category--}}
                <x-containers.formbody>
                    <x-slot name="label">
                        {{ __('Sub Categoría') }}
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
                    </x-slot>
                </x-containers.formbody>
                {{--Description--}}
                <x-containers.formbody :bg="true">
                    <x-slot name="label">
                        {{ __('Descripción') }}
                    </x-slot>
                    <x-slot name="input">
                        <x-component.inputarea wire:model="product.description" rows="10" cols="10"></x-component.inputarea>
                    </x-slot>
                </x-containers.formbody>
            </x-slot>
            {{--Footer--}}
            <x-slot name="save">
                <div class="justify-between">
                    <x-buttons.cian wire:click="save()" class="bg-blue-500">
                        {{__('Guardar')}}
                    </x-buttons.cian>
                </div>
            </x-slot>
        </x-containers.form>
    </x-containers.secondary>
    {{--End of the Form--}}
</div>
