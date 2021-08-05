<div>
    {{--Form Image--}}
    <x-containers.secondary>
        <x-containers.form>
             {{--Header--}}
            <x-slot name="title">
                {{$this->product->name}}
            </x-slot>
            {{--Form--}}
            <x-slot name="content">
                <x-tables.main>
                    <x-slot name="Header">
                        <th>
                            {{__('Variación')}}
                        </th>
                        <th>
                            {{__('Imágenes')}}
                        </th>
                    </x-slot>
                    <x-slot name="Content">
                        @foreach($this->variations as  $variation)
                            <tr>
                                <td class="py-3 px-6 text-center">
                                    @foreach($variation->attribute_value()->get() as $attribute_value)
                                        <span class="font-bold">
                                            {{ $attribute_value->attribute()->first()->type }}:
                                        </span>
                                        &nbsp;
                                        {{$attribute_value->value}}
                                        &nbsp;
                                    @endforeach
                                </td>
                                <td class="flex justify-center items-center">
                                    <livewire:admin.show.update.images :variation="$variation" :wire:key="$variation->id"/>
                                </td>
                            </tr>
                        @endforeach
                    </x-slot>
                </x-tables.main>
            </x-slot>
        </x-containers.form>
    </x-containers.secondary>
    {{--End of the Form--}}
</div>
