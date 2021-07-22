<div>
    <x-containers.secondary>
        <x-containers.form>
            <x-slot name="title">
                {{ __('Origen') }}
            </x-slot>
            <x-slot name="upload">
                <livewire:admin.upload.origins/>
            </x-slot>
            <x-slot name="content">
                <x-containers.formbody :bg="true">
                    <x-slot name="label">
                        {{ __('País') }}
                    </x-slot>
                    <x-slot name="input">
                        <x-component.input wire:model="origin.country" class="w-full"/>
                        <x-jet-input-error for="origin.country"/>
                    </x-slot>
                </x-containers.formbody>
            </x-slot>
            <x-slot name="save">
                <x-buttons.cian wire:click="Save()">
                    {{__('Guardar')}}
                </x-buttons.cian>
            </x-slot>
        </x-containers.form>
    </x-containers.secondary> 
</div>
