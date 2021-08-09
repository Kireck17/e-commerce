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
    
    {{--Form Variation--}}
    <x-containers.secondary class="bg-transparent shadow-none">
        <x-containers.form>
            {{--Header--}}
            <x-slot name="title">
                {{ __('Prueba') }}
                <div class=" h-full flex  py-2">
                    <x-buttons.default wire:click="add_stepblog()">
                        <i class="far fa-plus-square"></i>
                    </x-buttons.default>
                                
                </div>
            </x-slot>
            {{--Form--}}
            <x-slot name="content">
            
                @foreach($this->stepblog as $key => $stepblo)
                        
                    <div class="rounded-md border-4 border-double border-gray-500 p-1 mt-4">
                        <div class="flex justify-between items-center h-12">
                            <div class="w-6/12 h-full py-3 px-3 border-l-4 border-gray-500 flex items-center">
                                <h2 class="text-sm uppercase font-bold leading-4 tracking-widest">
                                    {{__('Titulo')}}
                                </h2>
                            </div>
                            
                        </div>
                        <x-containers.formbody class="border-t border-gray-300">
                            <x-slot name="label">
                                {{ __('Sub Titulo') }}
                                
                            </x-slot>
                            <x-slot name="input">
                                <x-component.input wire:model="stepblog.{{$key}}.title" class="w-full"/>
                                <x-jet-input-error for=""/>
                                
                            </x-slot>
                            
                        </x-containers.formbody>
                        
                        
                        <div class="mt-3 py-3 px-2 border-t border-gray-500">
                            <livewire:admin.tutorials.forms.sub-blog/>
                        </div>
                        
                    </div>
                @endforeach
            </x-slot>
        </x-containers.form>
    </x-containers.secondary>
    {{--End of the Form--}}
    
</div>