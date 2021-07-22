<div>
    {{--Button Upload--}}
    <x-buttons.cian wire:click="show_modal()">
        <i class="fas fa-upload mr-3"></i>
        {{__('Carga masiva . . .')}}
    </x-buttons.cian>
    {{--Start the Modal Trademarks--}}
    <x-jet-dialog-modal wire:model="show">
        {{--Title--}}
        <x-slot name="title">
            <span class="uppercase">
                {{__('Cargar archivos por excel')}}
            </span>
        </x-slot>
        {{--Start the Content--}}
        <x-slot name="content">
            {{--Download template--}}
            <x-containers.formbody :bg="true">
                <x-slot name="label">
                    {{__('Descargar plantilla')}}
                </x-slot>
                <x-slot name="input">
                    <i class="fas fa-file-csv text-5xl cursor-pointer" wire:click="download_template()"></i>
                </x-slot>
            </x-containers.formbody>
            {{--Upload file--}}
            <x-containers.formbody>
                <x-slot name="label">
                    {{__('Cargar archivo')}}
                </x-slot>
                <x-slot name="input">
                    <x-component.input type="file" type="file" accept=".csv" wire:model="template"/>
                    <x-jet-input-error for="template"/>
                </x-slot>
            </x-containers.formbody>
        </x-slot>
        {{--END the Content--}}
        <x-slot name="footer">
            <x-buttons.turquoise wire:loading.remove wire:target="template" wire:click="save_trademarks">
                {{__('Guardar')}}
            </x-buttons.turquoise>
            <x-buttons.default @Click="show = !show">
                {{__('Cerrar')}}
            </x-buttons.default>
            <x-banners.progress wire:loading wire:target="save_trademarks"/>
        </x-slot>
    </x-jet-dialog-modal>
    {{--END the Modal Trademarks--}}
    
</div>

