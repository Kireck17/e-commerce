<div>
    <x-containers.main>
        <x-containers.secondary>
        <div x-data="{ tab:['marcas','categorias','subcategorias','origen','almacenes','productos','proveedores','existencias','atributo','valor del atributo','atributo de variaciones','variaciones'], active:0 }">
                <div class=" flex flex-wrap space-y-2">
                    <template x-for="(tb, key) in tab">
                        <div class="border border-turquoise-dark text-turquoise-dark uppercase text-xs cursor-pointer px-3 py-1 rounded-b-md w-1/4">
                            <span x-text="tb" @click="active = key"></span>
                        </div>
                    </template>
                </div>
                <div x-show="active ===  0">
                    <livewire:admin.form.marca/>
                </div>
                <div x-show="active === 1">
                    <livewire:admin.form.categoria/>
                </div>
                <div x-show="active === 2"> 
                    <livewire:admin.form.sub-categoria/>
                </div>
                <div x-show="active ===  3"> 
                    <livewire:admin.form.origen/>
                </div>
                <div x-show="active ===  4"> 
                    <livewire:admin.form.almacen/>
                </div>
                <div x-show="active ===  5">
                    <livewire:admin.form.productos/>
                </div>
                <div x-show="active ===  6"> 
                    <livewire:admin.form.proveedor/>
                </div>
                <div x-show="active ===  7"> 
                    <livewire:admin.form.existencias/>
                </div>
                <div x-show="active ===  8"> 
                    <livewire:admin.form.atributo/>
                </div>
                <div x-show="active ===  9"> 
                    <livewire:admin.form.atributo-value/>
                </div>
                <div x-show="active ===  10"> 
                    <livewire:admin.form.atributo-variation/>
                </div>
                <div x-show="active ===  11"> 
                    <livewire:admin.form.variaciones/>
                </div>
            </div>
        </x-containers.secondary>
    </x-containers.main>
</div>
