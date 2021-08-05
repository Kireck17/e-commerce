<div>
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
