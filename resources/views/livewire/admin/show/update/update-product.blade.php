<div>
    <x-containers.main>
        <x-containers.secondary>
            {{--Container father--}}
            <div x-data="{ tab:@entangle('apartados'), active:0 }">
                <div class=" flex flex-wrap space-y-2">
                    <template x-for="(tb, key) in tab">
                        {{--Navigation menu title--}}
                        <div class="uppercase text-xs cursor-pointer px-3 py-1 w-1/4 font-bold"
                        :class="{
                            'border-b-2 border-turquoise-dark text-turquoise-dark': active === key,
                            'border-b-2 border-gray-400 text-gray-400': active != key,
                        }" @click="active = key">
                            <span x-text="tb"></span>
                        </div>
                        {{--END Navigation menu title--}}
                    </template>
                </div>
                {{--Containers forms--}}
                <div x-show="active ===  0">
                    <livewire:admin.show.update.product :product="$this->product" />
                </div>
                <div x-show="active === 1">
                    <livewire:admin.show.update.variation :product="$this->product" />
                </div>
                <div x-show="active === 2">
                    <livewire:admin.show.update.image :product="$this->product"/>
                </div>
                {{--END Containers forms--}}
            </div>
            {{--END Container father--}}
            <div class="flex justify-center items-center py-6">
                <x-buttons.default wire:click="cancel()">
                    {{__('Cancelar')}}
                </x-buttons.default>
            </div>
        </x-containers.secondary>
    </x-containers.main>
</div>