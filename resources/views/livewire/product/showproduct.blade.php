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
            <div class="container flex flex-col px-6 py-4 mx-auto space-y-6 lg:h-128 lg:py-16 lg:flex-row lg:items-center lg:space-x-6">
                <div class="flex flex-col items-center w-full lg:flex-row lg:w-1/2">
                    <div class="max-w-lg lg:mx-12 lg:order-2 space-y-2">
                        <h2 class="text-3xl font-medium tracking-wide text-gray-800 dark:text-white lg:text-3xl">{{__($product->name)}}</h2>
                        <h1 class="text-3xl font-medium tracking-wide text-gray-800 dark:text-white lg:text-4xl">${{__($product->variation()->first()->stock()->first()->price)}}</h1>
                        <p class="mt-4 text-gray-600 dark:text-gray-300">{{__($product->description)}}</p>
                        <!--Variations-->
                        <div>
                          <x-component.select>
                             @foreach($product->variation()->get() as $variation)
                              <option value="">
                                {{$variation->attribute_value()->first()->attribute()->first()->type}}:&nbsp;
                                {{$variation->attribute_value()->first()->value}}
                              </option>
                             @endforeach
                          </x-component.select>
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
                            <span class="mt-4 text-gray-600 dark:text-gray-300 ">
                                {{__('Cantidad disponible')}} : {{__($product->variation()->first()->stock()->first()->quantity)}}
                            </span>
                        </div>
                        <!-- sale -->
                        <x-buttons.cian>Comprar</x-buttons.cian>
                        <x-buttons.cian>Agregar al carrito</x-buttons.cian>
                    </div>
                </div>
                <!-- img -->
                <div class="flex justify-center order-2 mt-6 lg:mt-0 lg:space-y-3 lg:flex-col">
                    <button class="w-3 h-3 mx-2 bg-turquoise-dark rounded-full lg:mx-0 focus:outline-none"></button>
                    <button class="w-3 h-3 mx-2 bg-gray-300 rounded-full lg:mx-0 focus:outline-none hover:bg-turquoise-dark"></button>
                    <button class="w-3 h-3 mx-2 bg-gray-300 rounded-full lg:mx-0 focus:outline-none hover:bg-turquoise-dark"></button>
                    <button class="w-3 h-3 mx-2 bg-gray-300 rounded-full lg:mx-0 focus:outline-none hover:bg-turquoise-dark"></button>
                </div>
                <div class="flex items-center justify-center w-full h-96 lg:w-1/2">
                    @if($product->variation()->first()->files()->count())
                        <img class="object-cover w-full h-full max-w-2xl rounded-md" src="{{$product->variation()->first()->files()->first()->url}}" alt="apple watch photo">
                    @else
                        <img src="https://www.bicifan.uy/wp-content/uploads/2016/09/producto-sin-imagen.png" alt="">
                    @endif
                </div>
            </div>
        </x-containers.secondary>
        <!-- characteristics -->
        <x-containers.secondary>
            <div class="flex flex-col sm:flex-row justify-between items-center px-3 py-2 mb-4">
                <span class="text-black font-bold text-center text-4xl">
                    {{__('Caracteristicas del producto')}}
                </span>
            </div>
            <div class="flex items-center justify-center">
                <table class="table-fixed border-collapse lg:w-2/4 w-10/12">
                    <tbody class="text-sm font-normal text-gray-700">
                        @foreach($product->variation()->first()->attribute_value()->get() as $attributes)
                            <tr class="bg-gray-200 hover:bg-white border-b border-gray-200 py-10">
                                <td class="px-4 py-4">{{$attributes->attribute()->first()->type}}</td>
                                <td class="px-4 py-4">{{$attributes->value}}</td>
                            </tr>
                        @endforeach
                        <tr class="bg-gray-200 hover:bg-white border-b border-gray-200 py-10">
                            <td class="px-4 py-4">Marca</td>
                            <td class="px-4 py-4">{{$product->trademark()->first()->name}}</td>
                        </tr>
                        <tr class="bg-gray-200 hover:bg-white border-b border-gray-200 py-10">
                            <td class="px-4 py-4">Categoria</td>
                            @foreach($product->category()->get() as $category)
                                <td class="px-4 py-4">{{$category->name.', '.$product->first()->subcategory()->first()->name}}</td>
                            @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
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