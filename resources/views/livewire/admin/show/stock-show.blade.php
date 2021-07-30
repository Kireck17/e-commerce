{{-- Admin, Tabla de Stock--}}
<div>
    <x-containers.secondary>
        <x-containers.presentation>
            <x-slot name="title">
                {{__('Existencias')}}
            </x-slot>
            <x-slot name="signals">
                <span>
                    <i class="fas fa-warehouse mr-3"></i>
                    {{__('Almacén')}}
                </span>
                <span>
                    <i class="fas fa-boxes mr-3"></i>
                    {{__('Cantidad')}}
                </span>
                <span>
                    <i class="fas fa-dollar-sign mr-3"></i>
                    {{__('Precio')}}
                </span>
                <span>
                    <i class="fas fa-edit mr-3"></i>
                    {{__('Editar')}}
                </span>
                <span>
                    <i class="fas fa-trash-alt mr-3"></i>
                    {{__('Eliminar')}}
                </span>
            </x-slot>
            <x-slot name="controls">
                <x-searchadmin.search wire:model="search"/>
                <x-adminver.select wire:model="porpagina"/>
            </x-slot>
            <x-slot name="content">
                @forelse($stocks as $key => $sto)
                    <x-cards.content>
                        <x-slot name="title">
                            {{$sto->stockable()->first()->product()->first()->name}}
                            @foreach($sto->stockable()->first()->attribute_value()->get() as $attribute_value)
                                &nbsp;{{$attribute_value->attribute()->first()->type}}:&nbsp;
                                {{$attribute_value->value}}
                            @endforeach
                        </x-slot>
                        <x-slot name="content">
                            <x-cards.content-labels>
                                <i class="fas fa-warehouse mr-3 text-turquoise-light"></i>
                                {{$sto->warehouse()->first()->name}}
                            </x-cards.content-labels>
                            <x-cards.content-labels>
                                <i class="fas fa-boxes mr-3 text-turquoise-light"></i>
                                {{$sto->quantity}}
                            </x-cards.content-labels>
                            <x-cards.content-labels>
                                <i class="fas fa-dollar-sign mr-3 text-turquoise-light"></i>
                                {{$sto->price}}
                            </x-cards.content-labels>
                        </x-slot>
                        <x-slot name="buttons">
                            <div class="flex item-center justify-center cursor-pointer">
                                {{--llamado del componente de editar stock--}}
                                <livewire:admin.edit.stock :stock="$sto" :wire:key="'edit-'.$sto->id" />
                                <livewire:admin.delete.stock :stock="$sto" :wire:key="'delete-'.$sto->id"/>
                            </div>
                        </x-slot>
                    </x-cards.content>
                @empty
                    <div class="lg:col-span-5 sm:col-span-4 col-span-1 text-center">
                        <span class="ml-6 text-transparent text-gray-400 text-4xl font-extrabold">
                            Sin resultados para la busqueda "{{$this->search}}"
                        </span>
                    </div>
                @endforelse
            </x-slot>
            @if($stocks->count())
                <x-slot name="pagination">
                    {{$stocks->links()}}
                </x-slot>
            @endif
        </x-containers.presentation>
    </x-containers.secondary>
</div>