<div class="overflow-x-auto">
    <table class="min-w-max w-full table-auto">
        {{--Encabezado de la tabla--}}
        <thead class="text-base bg-cian-dark text-white uppercase text-sm leading-normal">
            <tr>
            {{$Header}}
            </tr>
        </thead>
        {{--Fin del encabezado--}}

        {{--Inicio del cuerpo de la tabla--}}
        <tbody class="text-gray-800 text-sm font-light border-b border-gray-200 divide-y divide-gray-200">
            {{$Content}}
        </tbody>
        {{--Fin del cuerpo de la tabla--}}
    </table>
</div>
