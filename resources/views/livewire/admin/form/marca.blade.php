<div>
    <x-containers.secondary>
        <x-containers.form>
            <x-slot name="title">
                {{ __('Marcas') }}
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
                        <x-component.input wire:model="trademark.name" class="w-full"/>
                        <x-jet-input-error for="trademark.name"/>
                    </x-slot>
                </x-containers.formbody>
            </x-slot>
            <x-slot name="save">
                <x-buttons.cian wire:click="saveTrademark()">
                    {{__('Guardar')}}
                </x-buttons.cian>
            </x-slot>
        </x-containers.form>
    </x-containers.secondary>
</div>