<div>
    <x-containers.secondary>
        <x-containers.form :bg="true">
            <x-slot name="title">
                {{ __('Categorias') }}
            </x-slot>
            <x-slot name="upload">
                <x-buttons.cian>
                    {{__('Carga masiva . . .')}}
                </x-buttons.cian>
            </x-slot>
            <x-slot name="content">
                <x-containers.formbody :bg="true">
                    <x-slot name="label">
                        {{ __('Nombre') }}
                    </x-slot>
                    <x-slot name="input">
                        <x-component.input wire:model="category.name" class="w-full"/>
                        <x-jet-input-error for="category.name"/>
                    </x-slot>
                </x-containers.formbody>
                <x-containers.formbody>
                    <x-slot name="label">
                        {{__('Descripción')}}
                    </x-slot>
                    <x-slot name="input">
                        <x-component.inputarea wire:model="category.description">
                        </x-component.inputarea>
                    </x-slot>
                </x-containers.formbody>
            </x-slot>
            <x-slot name="save">
                <x-buttons.cian wire:click="saveCategory()">
                    {{__('Guardar')}}
                </x-buttons.cian>
            </x-slot>
        </x-containers.form>
    </x-containers.secondary>
</div>
