<div>
    <x-buttons.cian wire:click="show_modal()">
        <i class="fas fa-upload mr-3"></i>
        {{__('Carga masiva . . .')}}
    </x-buttons.cian>
    <x-jet-dialog-modal wire:model="show">
        <x-slot name="title">
            <span class="uppercase">
                {{__('Cargar archivos por excel')}}
            </span>
        </x-slot>
        <x-slot name="content">
            <x-containers.formbody :bg="true">
                <x-slot name="label">
                    {{__('Descargar plantilla')}}
                </x-slot>
                <x-slot name="input">
                    <i class="fas fa-file-csv text-5xl cursor-pointer" wire:click="download_template()"></i>
                </x-slot>
            </x-containers.formbody>
            <x-containers.formbody>
                <x-slot name="label">
                    {{__('Cargar archivo')}}
                </x-slot>
                <x-slot name="input">
                    <x-component.input type="file" accept=".csv" wire:model="template" />
                    <x-jet-input-error for="template"/>
                </x-slot>
            </x-containers.formbody>

        </x-slot>
        <x-slot name="footer">
            <x-buttons.turquoise wire:loading.remove wire:target="template" wire:click="save_products">
                {{__('Guardar')}}
            </x-buttons.turquoise>
            <x-buttons.default @Click="show = !show">
                {{__('Cerrar')}}
            </x-buttons.default>
            <x-banners.progress wire:loading wire:target="save_products"/>
        </x-slot>
    </x-jet-dialog-modal>
</div>
