<div>
    <x-containers.main>
        <!-- header -->
        <x-containers.secondary>
            <div class="flex flex-col sm:flex-row justify-between items-center px-3 py-2">
                <span class="text-black font-bold text-center text-4xl">
                    {{__($product->trademark()->first()->name)}}
                </span>
            </div>
        </x-containers.secondary>
        <!-- Product -->
        <x-containers.secondary>
            <div class="container flex flex-col-reverse px-6 mx-auto space-y-6 lg:flex-row lg:items-center lg:space-x-6">
                <div class="flex flex-col items-center w-full lg:flex-row lg:w-1/2">
                    <div class="max-w-lg lg:mx-12 lg:order-2 space-y-2">
                        <h2 class="text-3xl font-medium tracking-wide text-gray-800 dark:text-white lg:text-3xl">{{__($product->name)}}</h2>
                        <h1 class="text-3xl font-medium tracking-wide text-gray-800 dark:text-white lg:text-4xl">${{__($product->variation()->first()->stock()->first()->price)}}</h1>
                        <p class="mt-4 text-gray-600 dark:text-gray-300">{{__($product->description)}}</p>
                        <!--Variations-->
                        <div>
                          <x-component.select wire:model="variation" wire:chanage="get_attributes">
                             @foreach($product->variation()->get() as $key => $variation)
                              <option value="{{$variation->id}}">
                                 {{__('Variacion')}} {{$key+1}}
                              </option>
                             @endforeach
                          </x-component.select>
                          {{$this->variation}}
                        </div>
                        <!-- quantity -->
                        <div class="inline-block space-x-3 py-2">
                            <span class="mt-4 text-gray-600 dark:text-gray-300">
                                {{__('Cantidad')}} :
                            </span>
                            <x-buttons.cian wire:click="remove">
                                <i class="fas fa-minus"></i>
                            </x-buttons.cian>
                            <span class="p-2">
                               {{$this->quantity}}
                            </span>
                            <x-buttons.cian wire:click="add">
                                <i class="fas fa-plus"></i>
                            </x-buttons.cian>
                        </div>
                        <div class="py-2">
                            <span class="mt-4 text-gray-600 dark:text-gray-300 ">
                                {{__('Cantidad disponible')}} : {{$this->get_stock()}}
                            </span>
                        </div>
                        <!-- sale -->
                        <x-buttons.cian>
                            Agregar al carrito
                        </x-buttons.cian>
                    </div>
                </div>
                <!-- img -->
                <x-slider.carousel :files="$this->get_images()">
                </x-slider.carousel>
            </div>
        </x-containers.secondary>
        <!-- characteristics -->
        <x-containers.secondary>
            <div class="flex flex-col sm:flex-row justify-between items-center px-3 py-2 mb-4">
                <span class="text-black font-bold text-center text-4xl">
                    {{__('Caracteristicas del producto')}}
                </span>
            </div>
            <dl class="lg:w-2/4 w-10/12 divide-y divide-gray-900 mx-auto">
                @foreach($this->get_attributes() as $attributes)
                    <div class="bg-gray-200 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            {{$attributes->attribute()->first()->type}}:
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{$attributes->value}}
                        </dd>
                    </div>
                @endforeach
                <div class="bg-gray-200 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                    <dt class="text-sm font-medium text-gray-500">
                        {{__('Marca')}}:
                    </dt>
                    <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{$product->trademark()->first()->name}}
                    </dd>
                </div>
            </dl>
        </x-containers.secondary>

        <!-- trademark -->
        <x-containers.secondary>
            <div class="flex flex-col sm:flex-row justify-between items-center px-3 py-2">
                <span class="text-black font-bold text-center text-4xl">
                    {{__('Productos relacionados')}}
                </span>
                
            </div>
            <div class="px-0 sm:px-4 py-6 grid grid-cols-1 sm:grid-cols-3 md:grid-cols-5 gap-4">
                @foreach($trademark as $product)
                    <x-cards.three :link="route('product.showproduct',['product' => $product->id])">
                        <x-slot name="image">
                                <img src="https://www.bicifan.uy/wp-content/uploads/2016/09/producto-sin-imagen.png" alt="">
                        </x-slot>
                        <x-slot name="trademark">
                            {{$product->trademark()->first()->name}}
                        </x-slot>
                        <x-slot name="name">
                            {{$product->name}}
                        </x-slot>
                        <x-slot name="price">
                            $ {{$product->variation()->first()->stock()->first()->price}}
                        </x-slot>
                    </x-cards.three>
                @endforeach
            </div>
            <div class="bg-white px-4 py-3 border-t border-gray-200 sm:px-6">
                    {{$trademark->links()}}
            </div>
        </x-containers.secondary>
    </x-containers.main>
</div>