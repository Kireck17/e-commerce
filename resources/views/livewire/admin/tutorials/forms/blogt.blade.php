<div>
    <x-containers.secondary>
        {{--Start the form--}}
        <x-containers.form>
            {{--Title--}}
            <x-slot name="title">
                {{ __('Creación Tutorial Paso a Paso') }}
            </x-slot>
            {{--Upload--}}
            <x-slot name="upload">
                
            </x-slot>
            {{--Start the content--}}
            
            <x-slot name="content">
                <x-containers.formbody :bg="true">
                    {{--Name--}}
                    <x-slot name="label">
                        {{ __('Titulo del Tutorial') }}
                    </x-slot>
                    <x-slot name="input">
                        <x-component.input wire:model="blogs.title" class="w-full"/>
                        <x-jet-input-error for="blogs.title"/>
                    </x-slot>
                </x-containers.formbody>
                <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    <x-forms.label for="imagen">
                                        <h1>Portada:</h1>
                                    </x-forms.label>
                                </dt>
                        
                        
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 grid grid-cols-2">
                            <div>
                                <x-forms.input type="file" wire:model=""/> 
                                <x-jet-input-error for="" />
                            </div>
                            
                                <div class="flex flex-col justify-center items-center p-2">
                                    <span class="font-bold">Vista Previa</span>
                                    <img src="" alt="" class="w-20 h-20">
                                </div>
                        </dd>  
                </div>
                <div class="flex justify-between items-center">
                        <span class="text-black font-bold text-center text-4xl">
                            {{__('Pasos')}}
                        </span>
                        <x-buttons.turquoise wire:click="add_contentblog()">
                            <i class="far fa-plus-square mr-3"></i>
                            {{__('Agregar')}}
                        </x-buttons.turquoise>
                </div>
                    @foreach($this->contentblog as $key => $prueba)
                        <x-containers.formbody class="border-t border-gray-300">
                            <x-slot name="label">
                                {{ __('Sub Titulo') }}
                            </x-slot>
                            <x-slot name="input">
                                <x-component.input wire:model="" class="w-full"/>
                                <x-jet-input-error for=""/>
                            </x-slot>
                            
                        </x-containers.formbody>
                        
                        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                                <dt class="text-sm font-medium text-gray-500">
                                    <x-forms.label for="imagen">
                                        <h1>Imaagen Relacionada:</h1>
                                    </x-forms.label>
                                </dt>
                        
                                <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 grid grid-cols-2">
                                    <div>
                                        <x-forms.input type="file" wire:model=""/> 
                                        <x-jet-input-error for="" />
                                    </div>
                                    
                                        <div class="flex flex-col justify-center items-center p-2">
                                            <span class="font-bold">Vista Previa</span>
                                            <img src="" alt="" class="w-20 h-20">
                                        </div>
                                </dd>  
                        </div>
                        <x-containers.formbody>
                            <x-slot name="label">
                                {{ __('Contenido') }}
                            </x-slot>
                    
                            <x-slot name="input">
                                <x-component.inputarea wire:model="" rows="10" cols="10"></x-component.inputarea>
                            </x-slot>
               
                        </x-containers.formbody>
                        <div class="py-3 flex justify-center">
                            <x-buttons.red>
                                {{__('Quitar característica')}}
                            </x-buttons.red>
                        </div>
                    @endforeach
            </x-slot>
             {{--END the content--}}

            {{--Save--}}
            <x-slot name="save">
                <x-buttons.cian wire:click="saveBlog()">
                    {{__('Guardar')}}
                </x-buttons.cian>
            </x-slot>
        </x-containers.form>
        {{--END the form--}}
    </x-containers.secondary>
</div>