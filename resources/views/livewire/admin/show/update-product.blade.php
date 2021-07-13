<div>
    <x-containers.secondary>
        <x-containers.form>
            <x-slot name="title">
                {{ __('Editando producto') }}
            </x-slot>
            <x-slot name="content">
                <x-containers.formbody :bg="true">
                    <x-slot name="label">
                        <img src="" alt="producto">
                    </x-slot>
                    <x-slot name="input">
                        <x-component.input class="w-full"/>
                    </x-slot>
                </x-containers.formbody>
                <x-containers.formbody :bg="true">
                    <x-slot name="label">
                        {{ __('Nombre') }}
                    </x-slot>
                    <x-slot name="input">
                        <x-component.input wire:model="theproduct.name" class="w-full"/>
                    </x-slot>
                </x-containers.formbody>
                <x-containers.formbody :bg="true">
                    <x-slot name="label">
                        {{ __('Codigo de barras') }}
                    </x-slot>
                    <x-slot name="input">
                        <x-component.input wire:model="theproduct.barcode" class="w-full"/>
                    </x-slot>
                </x-containers.formbody>
                <x-containers.formbody :bg="true">
                    <x-slot name="label">
                        {{ __('Descripción') }}
                    </x-slot>
                    <x-slot name="input">
                        <x-component.input wire:model="theproduct.description" class="w-full"/>
                    </x-slot>
                </x-containers.formbody>
                <x-containers.formbody :bg="true">
                    <x-slot name="label">
                        {{ __('Variaciones') }}
                    </x-slot>
                    <x-slot name="input">
                        <x-component.input class="w-full"/>
                    </x-slot>
                </x-containers.formbody>
            </x-slot>
            <x-slot name="save">
                <div class="justify-between">
                    <x-buttons.cian wire:click="cancel()" class="bg-red-500">
                        {{__('Cancelar')}}
                    </x-buttons.cian>
                    <x-buttons.cian wire:click="" class="bg-blue-500">
                        {{__('Guardar')}}
                    </x-buttons.cian>
                </div>
                
            </x-slot>
        </x-containers.form>
    </x-containers.secondary>
</div>