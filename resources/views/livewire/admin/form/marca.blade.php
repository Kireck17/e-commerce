<div>
    <x-containers.secondary>
        {{--Start the form--}}
        <x-containers.form>
            {{--Title--}}
            <x-slot name="title">
                {{ __('Marcas') }}
            </x-slot>
            {{--Upload--}}
            <x-slot name="upload">
                <livewire:admin.upload.trademarks/>
            </x-slot>
            {{--Start the content--}}
            <x-slot name="content">
                <x-containers.formbody :bg="true">
                    {{--Name--}}
                    <x-slot name="label">
                        {{ __('Nombre') }}
                    </x-slot>
                    <x-slot name="input">
                        <x-component.input wire:model="trademark.name" class="w-full"/>
                        <x-jet-input-error for="trademark.name"/>
                    </x-slot>
                </x-containers.formbody>
            </x-slot>
             {{--END the content--}}

            {{--Save--}}
            <x-slot name="save">
                <x-buttons.cian wire:click="saveTrademark()">
                    {{__('Guardar')}}
                </x-buttons.cian>
            </x-slot>
        </x-containers.form>
        {{--END the form--}}
    </x-containers.secondary>
</div>
