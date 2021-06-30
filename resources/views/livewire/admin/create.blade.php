<div>
    <x-containers.main>
        <x-containers.secondary>
        <div x-data="{ tab:['trademark','category','subcategory','origin','warehouse','product','provider','stock'] }">
                <div class="space-x-3 space-y-2">
                    <x-buttons.turquoise :class="{ 'active': tab === 'trademark' }" @click="tab = 'trademark'" class=" text-yellow-light">
                    Trademark
                    </x-buttons.turquoise>
                    <x-buttons.turquoise :class="{ 'active': tab === 'category' }" @click="tab = 'category'" class=" text-yellow-light">
                        Category
                    </x-buttons.turquoise>
                    <x-buttons.turquoise :class="{ 'active': tab === 'subcategory' }" @click="tab = 'subcategory'" class=" text-yellow-light">
                        Subcategory
                    </x-buttons.turquoise>
                    <x-buttons.turquoise :class="{ 'active': tab === 'origin' }" @click="tab = 'origin'" class=" text-yellow-light">
                        Origin
                    </x-buttons.turquoise>
                    <x-buttons.turquoise :class="{ 'active': tab === 'warehouse' }" @click="tab = 'warehouse'" class=" text-yellow-light">
                        Warehouse
                    </x-buttons.turquoise>
                    <x-buttons.turquoise :class="{ 'active': tab === 'product' }" @click="tab = 'product'" class=" text-yellow-light">
                        Product
                    </x-buttons.turquoise>
                    <x-buttons.turquoise :class="{ 'active': tab === 'provider' }" @click="tab = 'provider'" class=" text-yellow-light">
                        Provider
                    </x-buttons.turquoise>
                    <x-buttons.turquoise :class="{ 'active': tab === 'stock' }" @click="tab = 'stock'" class=" text-yellow-light">
                        Stock
                    </x-buttons.turquoise>
                </div>
                <div x-show="tab === 'trademark'">
                    <x-containers.secondary>
                        <div class="flex flex-col sm:flex-row justify-between items-center px-3 py-2">
                            <span class="text-black font-bold text-center text-4xl">
                            {{ __('Trademark') }}
                            </span>
                        </div>
                    </x-containers.secondary>
                    <x-containers.secondary>
                        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                            <div class="px-4 py-5 sm:px-6">
                                <x-buttons.cian>
                                    {{__('Carga masiva . . .')}}
                                </x-buttons.cian>
                            </div>
                            <div class="border-t border-gray-200">
                                <dl>
                                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">
                                            {{__('Name')}}
                                        </dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            <x-component.input/>
                                        </dd>
                                    </div>
                                </dl>
                                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                    <x-buttons.cian>
                                        {{__('save')}}
                                    </x-buttons.cian>
                                </div>
                            </div>
                        </div>
                    </x-containers.secondary>
                </div>
                <div x-show="tab === 'category'">
                    <x-containers.secondary>
                        <div class="flex flex-col sm:flex-row justify-between items-center px-3 py-2">
                            <span class="text-black font-bold text-center text-4xl">
                                {{ __('Category') }}
                            </span>
                        </div>
                    </x-containers.secondary>
                    <x-containers.secondary>
                        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                            <div class="px-4 py-5 sm:px-6">
                                <x-buttons.cian>
                                    {{__('Carga masiva . . .')}}
                                </x-buttons.cian>
                            </div>
                            <div class="border-t border-gray-200">
                                <dl>
                                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">
                                            {{__('Name')}}
                                        </dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            <x-component.input/>
                                        </dd>
                                    </div>
                                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">
                                            {{__('Description')}}
                                        </dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            <x-component.inputarea>
                                            </x-component.inputarea>
                                        </dd>
                                    </div>
                                </dl>
                                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                    <x-buttons.cian>
                                        {{__('save')}}
                                    </x-buttons.cian>
                                </div>
                            </div>
                        </div>
                    </x-containers.secondary> 
                </div>
                <div x-show="tab === 'subcategory'"> 
                    <x-containers.secondary>
                        <div class="flex flex-col sm:flex-row justify-between items-center px-3 py-2">
                            <span class="text-black font-bold text-center text-4xl">
                            {{ __('Subcategory') }}
                            </span>
                        </div>
                    </x-containers.secondary>
                    <x-containers.secondary>
                        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                            <div class="px-4 py-5 sm:px-6">
                                <x-buttons.cian>
                                    {{__('Carga masiva . . .')}}
                                </x-buttons.cian>
                            </div>
                            <div class="border-t border-gray-200">
                                <dl>
                                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">
                                            {{__('Name')}}
                                        </dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            <x-component.input/>
                                        </dd>
                                    </div>
                                </dl>
                                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                    <x-buttons.cian>
                                        {{__('save')}}
                                    </x-buttons.cian>
                                </div>
                            </div>
                        </div>
                    </x-containers.secondary>
                </div>
                <div x-show="tab === 'origin'"> 
                    <x-containers.secondary>
                        <div class="flex flex-col sm:flex-row justify-between items-center px-3 py-2">
                            <span class="text-black font-bold text-center text-4xl">
                                {{ __('Origin') }}
                            </span>
                        </div>
                    </x-containers.secondary>
                    <x-containers.secondary>
                        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                            <div class="px-4 py-5 sm:px-6">
                                <x-buttons.cian>
                                    {{__('Carga masiva . . .')}}
                                </x-buttons.cian>
                            </div>
                            <div class="border-t border-gray-200">
                                <dl>
                                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">
                                            {{__('Country')}}
                                        </dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            <x-component.input/>
                                        </dd>
                                    </div>
                                </dl>
                                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                    <x-buttons.cian>
                                         {{__('save')}}
                                    </x-buttons.cian>
                                </div>
                            </div>
                        </div>
                    </x-containers.secondary>
                </div>
                <div x-show="tab === 'warehouse'"> 
                    <x-containers.secondary>
                        <div class="flex flex-col sm:flex-row justify-between items-center px-3 py-2">
                            <span class="text-black font-bold text-center text-4xl">
                                {{ __('Warehouse') }}
                            </span>
                        </div>
                    </x-containers.secondary>
                    <x-containers.secondary>
                        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                            <div class="px-4 py-5 sm:px-6">
                                <x-buttons.cian>
                                    {{__('Carga masiva . . .')}}
                                </x-buttons.cian>
                            </div>
                            <div class="border-t border-gray-200">
                                <dl>
                                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">
                                            {{__('Name')}}
                                        </dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            <x-component.input/>
                                        </dd>
                                    </div>
                                </dl>
                                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                    <x-buttons.cian>
                                        {{__('save')}}
                                    </x-buttons.cian>
                                </div>
                            </div>
                        </div>
                    </x-containers.secondary> 
                </div>
                <div x-show="tab === 'product'">
                    <x-containers.secondary>
                        <div class="flex flex-col sm:flex-row justify-between items-center px-3 py-2">
                            <span class="text-black font-bold text-center text-4xl">    
                                {{ __('Product') }}
                            </span>
                        </div>
                    </x-containers.secondary>
                    <x-containers.secondary>
                        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                            <div class="px-4 py-5 sm:px-6">
                                <x-buttons.cian>
                                    {{__('Carga masiva . . .')}}
                                </x-buttons.cian>
                            </div>
                            <div class="border-t border-gray-200">
                                <dl>
                                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">
                                            {{__('Name')}}
                                        </dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            <x-component.input/>
                                        </dd>
                                    </div>
                                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">
                                            {{__('Barcode')}}
                                        </dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            <x-component.input type="number"/>
                                        </dd>
                                    </div>
                                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">
                                            {{__('Category')}}
                                        </dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            <x-component.select>
                                                <x-slot name="default">
                                                    {{__('--Selecciona--')}}  
                                                </x-slot>
                                            </x-component.select>
                                        </dd>
                                    </div>
                                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">
                                            {{__('Subcategory')}}
                                        </dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            <x-component.select>
                                                <x-slot name="default">
                                                    {{__('--Selecciona--')}}  
                                                </x-slot>
                                            </x-component.select>
                                        </dd>
                                    </div>
                                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">
                                            {{__('Trademark')}}
                                        </dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            <x-component.select>
                                                <x-slot name="default">
                                                    {{__('--Selecciona--')}}  
                                                </x-slot>
                                            </x-component.select>
                                        </dd>
                                    </div>
                                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">
                                            {{__('Description')}}
                                        </dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            <x-component.inputarea></x-component.inputarea>
                                        </dd>
                                    </div>
                                </dl>
                                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                    <x-buttons.cian>
                                        {{__('save')}}
                                    </x-buttons.cian>
                                </div>
                            </div>
                        </div>
                    </x-containers.secondary> 
                </div>
                <div x-show="tab === 'provider'"> 
                    <x-containers.secondary>
                        <div class="flex flex-col sm:flex-row justify-between items-center px-3 py-2">
                            <span class="text-black font-bold text-center text-4xl">
                            {{ __('Provider') }}
                            </span>
                        </div>
                    </x-containers.secondary>
                    <x-containers.secondary>
                        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                            <div class="px-4 py-5 sm:px-6">
                                <x-buttons.cian>
                                    {{__('Carga masiva . . .')}}
                                </x-buttons.cian>
                            </div>
                            <div class="border-t border-gray-200">
                                <dl>
                                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">
                                            {{__('Name')}}
                                        </dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            <x-component.input/>
                                        </dd>
                                    </div>
                                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">
                                            {{__('Origin')}}
                                        </dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            <x-component.select>
                                                <x-slot name="default">
                                                    {{__('--Selecciona--')}}  
                                                </x-slot>
                                            </x-component.select>
                                        </dd>
                                    </div>
                                </dl>
                                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                    <x-buttons.cian>
                                        {{__('save')}}
                                    </x-buttons.cian>
                                </div>
                            </div>
                        </div>
                    </x-containers.secondary>
                </div>
                <div x-show="tab === 'stock'"> 
                    <x-containers.secondary>
                        <div class="flex flex-col sm:flex-row justify-between items-center px-3 py-2">
                            <span class="text-black font-bold text-center text-4xl">    
                                {{ __('Stock') }}
                            </span>
                        </div>
                    </x-containers.secondary>
                    <x-containers.secondary>
                        <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                            <div class="px-4 py-5 sm:px-6">
                                <x-buttons.cian>
                                    {{__('Carga masiva . . .')}}
                                </x-buttons.cian>
                            </div>
                            <div class="border-t border-gray-200">
                                <dl>
                                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">
                                            {{__('Kit')}}
                                        </dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            <x-component.select>
                                                <x-slot name="default">
                                                    {{__('--Selecciona--')}}  
                                                </x-slot>
                                            </x-component.select>
                                        </dd>
                                    </div>
                                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">
                                            {{__('Provider')}}
                                        </dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            <x-component.select>
                                                <x-slot name="default">
                                                    {{__('--Selecciona--')}}  
                                                </x-slot>
                                            </x-component.select>
                                        </dd>
                                    </div>
                                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">
                                            {{__('Warehouse')}}
                                        </dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            <x-component.select>
                                                <x-slot name="default">
                                                    {{__('--Selecciona--')}}  
                                                </x-slot>
                                            </x-component.select>
                                        </dd>
                                    </div>
                                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">
                                            {{__('quantity')}}
                                        </dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            <x-component.input type="number" min="10" max="100"/>
                                        </dd>
                                    </div>
                                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                        <dt class="text-sm font-medium text-gray-500">
                                            {{__('Price')}}
                                        </dt>
                                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                                            <x-component.input type="number" step="0.01" min="0"/>
                                        </dd>
                                    </div>
                                </dl>
                                <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                    <x-buttons.cian>
                                        {{__('save')}}
                                    </x-buttons.cian>
                                </div>
                            </div>
                        </div>
                    </x-containers.secondary> 
                </div>
            </div>
        </x-containers.secondary>
    </x-containers.main>
</div>
