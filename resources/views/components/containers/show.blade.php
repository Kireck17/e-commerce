{{--Table--}}
<div class="overflow-x-auto">
    <div class="pr-5 pl-5 w-full flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
        <div class="w-full bg-white shadow-md rounded my-6">
            <h1 class="font-serif text-black text-2xl px-2 py-4">
                {{$title}}
            </h1>
            {{-- Apartado de busqueda --}}
            <div class="flex justify-between my-2">
                {{$search}}
            </div>
            {{-- Fin de la busqueda --}}

            {{-- Inicio de la tabla --}}
            <table class="min-w-max w-full table-auto">
                {{-- Encabezado de la tabla --}}
                
                <thead class="bg-cian-dark text-white uppercase text-sm leading-normal">
                    {{$thead}}
                </thead>
                
                {{-- Fin del encabezado --}}

                {{-- Inicio del cuerpo de la tabla --}}
                <tbody class="text-gray-800 text-sm font-light">
                    {{$tbody}}
                </tbody>
                {{-- Fin del cuerpo de la tabla --}}
            </table>
            {{-- Fin de la tabla --}}

            {{-- Paginacion --}}
            <div class="bg-white px-4 py-3 border-t border-gray-200 sm:px-6">
                {{$paginate}}
            </div>
        </div>

    </div>
</div>