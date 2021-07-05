<div>
    <x-containers.secondary>
        <x-containers.form>
            <x-slot name="title">
                {{ __('Attributo') }}
            </x-slot>
            <x-slot name="upload">
                <x-buttons.cian>
                    {{__('Carga masiva . . .')}}
                </x-buttons.cian>
            </x-slot>
            <x-slot name="content">
                <x-containers.formbody :bg="true">
                    <x-slot name="label">
                        {{ __('Tipo') }}
                    </x-slot>
                    <x-slot name="input">
                        <x-component.input wire:model="attribute.type" class="w-full"/>
                        <x-jet-input-error for="attribute.type"/>
                    </x-slot>
                </x-containers.formbody>
            </x-slot>
            <x-slot name="save">
                <x-buttons.cian wire:click="saveAttribute()">
                    {{__('Guardar')}}
                </x-buttons.cian>
            </x-slot>
        </x-containers.form>
    </x-containers.secondary> 
</div>
