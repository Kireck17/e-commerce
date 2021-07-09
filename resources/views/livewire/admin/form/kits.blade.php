<div>
    <x-containers.secondary>
        <x-containers.form>
            <x-slot name="title">
                {{ __('Kits') }}
            </x-slot>
            @if($fullvariations->count())
                <x-slot name="upload">
                    <x-buttons.cian>
                        {{__('Carga masiva . . .')}}
                    </x-buttons.cian>
                </x-slot>
                <x-slot name="content">
                    <x-containers.formbody :bg="true">
                        <x-slot name="label">
                            {{ __('Nombre del kit') }}
                        </x-slot>
                        <x-slot name="input">
                            <x-component.input type="text" wire:model="name" class="w-full"/>
                            <x-jet-input-error for="name"/>
                        </x-slot>
                    </x-containers.formbody>
                    <div class="flex justify-between">
                        <h2 class="text-black font-bold text-center text-4xl">
                            {{__('Productos que conforman el kit')}}
                        </h2>
                        <x-buttons.turquoise wire:click="add_kit_detail()">
                            <i class="far fa-plus-square mr-3"></i>
                            {{__('Agregar')}}
                        </x-buttons.turquoise>
                    </div>
                    @foreach($this->kit_detail as $key => $detail)
                        <livewire:admin.form.combo :indice="$key" :wire:key="$key"/>
                    @endforeach
                </x-slot>
                <x-slot name="save">
                    <x-buttons.cian wire:click="save_kit">
                        {{__('Guardar')}}
                    </x-buttons.cian>
                </x-slot>
            @endif
        </x-containers.form>
        @if($fullvariations->count() == 0)
            <span class="text-gray-300 font-bold text-center text-4xl">
                No hay Variaciones registradas
            </span>
        @endif
    </x-containers.secondary>
</div>
