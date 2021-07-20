<div>
    <x-containers.main>
        <x-containers.secondary>
            {{--Container father--}}
            <div x-data="{ tab:@entangle('apartados'), active:0 }">
                <div class=" flex flex-wrap space-y-2">
                    <template x-for="(tb, key) in tab">
                        {{--Navigation menu title--}}
                        <div class="uppercase text-xs cursor-pointer px-3 py-1 w-1/4 font-bold"
                        :class="{
                            'border-b-2 border-turquoise-dark text-turquoise-dark': active === key,
                            'border-b-2 border-gray-400 text-gray-400': active != key,
                        }">
                            <span x-text="tb" @click="active = key"></span>
                        </div>
                        {{--END Navigation menu title--}}
                    </template>
                </div>
                {{--Containers forms--}}
                <div x-show="active ===  0">
                    {{--Form Product--}}
                    <x-containers.secondary>
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
                                    <x-buttons.red wire:click="cancel()">
                                        <i class="far fa-window-close"></i>
                                    </x-buttons.red>
                                </div>
                            </x-slot>
                        </x-containers.form>
                    </x-containers.secondary>
                    {{--End of the Form--}}
                </div>
                <div x-show="active === 1">
                    {{--Form Variation--}}
                    <x-containers.secondary>
                        <x-containers.form>
                            {{--Header--}}
                            <x-slot name="title">
                                {{ __('Características') }}
                            </x-slot>
                            {{--Form--}}
                            <x-slot name="content">
                                <div class="divide-y">
                                    @foreach($this->variations as  $variation)
                                        <livewire:admin.show.update.variations :variation="$variation" :wire:key="$variation->id"/>
                                    @endforeach
                                    <div class="mt-4">
                                        <livewire:admin.show.update.variationsadd :product="$product"/>
                                    </div>
                                </div>    
                            </x-slot>
                            {{--Footer--}}
                            <x-slot name="save">
                                <div class="justify-between">
                                    <x-buttons.red wire:click="cancel()">
                                        <i class="far fa-window-close"></i>
                                    </x-buttons.red>
                                </div>
                            </x-slot>
                        </x-containers.form>
                    </x-containers.secondary>
                    {{--End of the Form--}}
                </div>
                <div x-show="active === 2">
                    {{--Form Image--}}
                    <x-containers.secondary>
                        <x-containers.form>
                             {{--Header--}}
                            <x-slot name="title">
                                {{ __('Imagenes del producto') }}
                            </x-slot>
                            {{--Form--}}
                            <x-slot name="content">
                                @foreach($this->variations as  $variation)
                                    <livewire:admin.show.update.images :variation="$variation" :wire:key="$variation->id"/>
                                @endforeach
                            </x-slot>
                            {{--Footer--}}
                            <x-slot name="save">
                                <div class="justify-between">
                                    <x-buttons.red wire:click="cancel()">
                                        <i class="far fa-window-close"></i>
                                    </x-buttons.red>
                                </div>
                            </x-slot>
                        </x-containers.form>
                    </x-containers.secondary>
                    {{--End of the Form--}}
                </div>
                {{--END Containers forms--}}
            </div>
            {{--END Container father--}}
        </x-containers.secondary>
    </x-containers.main>
    
</div>