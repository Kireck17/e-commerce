<div>
    <x-containers.main>
        <x-containers.secondary>
            <div x-data="{ tab:@entangle('apartados'), active:0 }">
                <div class=" flex flex-wrap space-y-2">
                    <template x-for="(tb, key) in tab">
                        <div class="uppercase text-xs cursor-pointer px-3 py-1 w-1/4 font-bold"
                        :class="{
                            'border-b-2 border-turquoise-dark text-turquoise-dark': active === key,
                            'border-b-2 border-gray-400 text-gray-400': active != key,
                        }" @click="active = key">
                            <span x-text="tb"></span>
                        </div>
                    </template>
                </div>
                
                <div x-show="active ===  0">
                    <livewire:admin.tutorials.forms.blogt/>
                </div>
                <div x-show="active === 1">
                    <livewire:admin.tutorials.forms.content-blogg/>
                </div>
            </div>
        </x-containers.secondary>
    </x-containers.main>
</div>
