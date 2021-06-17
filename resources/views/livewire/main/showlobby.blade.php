<div>
<<<<<<< HEAD
   {{--Carrusel--}}
   <div class="container mx-auto bg-white py-16 my-4 border rounded-lg overflow-hidden shadow-xl">
        {{-- Inicio del carousel --}}
        <div class="my-8 flex flex-col h-48">
            <div class="w-full h-full relative px-6" x-data="{ activeSlide: 0, slides: [
                'https://astelus.com/wp-content/viajes/Lago-Moraine-Parque-Nacional-Banff-Alberta-Canada.jpg',
                'https://www.dzoom.org.es/wp-content/uploads/2019/09/paisajes-expresivos-734x489.jpg',
                'https://mott.pe/noticias/wp-content/uploads/2019/03/los-50-paisajes-maravillosos-del-mundo-para-tomar-fotos-1280x720.jpg',
                'https://www.laportadacanada.com/userfiles/images/destacadofo1(1).jpg',
                'https://static.vix.com/es/sites/default/files/styles/4x3/public/imj/p/paisajes-espectaculares-del-mundo-1.jpg'
                ] }">
                {{-- Imágenes --}}
                <template x-for="(slide,key) in slides" :key="key">
                    <div x-show="activeSlide === key" class="flex flex-col h-full items-center overflow-hidden">
                        <img class="w-4/5 sm:w-1/2 h-full" :src="slide" alt="">
                    </div>
                </template>

                {{-- Anterior/Siguiente Flechas --}}
                <div class="absolute inset-0 flex">
                    <div class="flex items-center justify-start w-1/2">
                        <button class="border border-cian-dark text-cian-dark hover:border-cian-light hover:text-cian-light font-bold shadow-lg w-1/6 sm:w-1/12 h-full ml-3 sm:ml-6" x-on:click="activeSlide = activeSlide === 0 ? slides.length : activeSlide - 1">
                            <i class="fas fa-arrow-left text-2xl"></i>
                        </button>
                    </div>
                    <div class="flex items-center justify-end w-1/2">
                        <button class="border border-cian-dark text-cian-dark hover:border-cian-light hover:text-cian-light font-bold shadow-lg w-1/6 sm:w-1/12 h-full mr-3 sm:mr-6" x-on:click="activeSlide = activeSlide === slides.length ? 0 : activeSlide + 1">
                            <i class="fas fa-arrow-right text-2xl"></i>
                        </button>
                    </div>
                </div>

                {{-- Botónes --}}
                <div class="absolute w-full flex items-center justify-center px-4">
                    <template x-for="slide in slides" :key="slide">
                        <button class="flex-1 w-4 h-2 mt-4 mx-2 mb-0 rounded-full overflow-hidden transition-colors duration-200 ease-out hover:bg-teal-600 hover:shadow-lg"
                        :class="{ 'bg-orange-600': activeSlide === slide,'bg-teal-300': activeSlide !== slide }" x-on:click="activeSlide = slide"
                        ></button>
                    </template>
                </div>
            </div>
        </div>
   </div>
   {{--offers--}}
   <div class="container mx-auto bg-white py-4 px-4 my-4 border rounded-lg overflow-hidden shadow-xl">
        <div>
            <span class="text-black font-bold text-center text-4xl">
                Ofertas
            </span>
            <a href="#" class="text-blue-500 font-extrabold underline text-center text-base hover:text-yellow-500">
                Ver mas
            </a> 
        </div>
        <div class="px-3 md:px-0 py-6 grid grid-cols-1 sm:grid-cols-3 md:grid-cols-4 gap-10">
            <x-design.card-offer :link="'#'"> 
                <x-slot name="image">
                    imagen
                </x-slot>
                <x-slot name="trademark">
                    Sax Shields
                </x-slot>
                <x-slot name="name">
                    Kit de Snaker Shields 2 Pares (4 piezas) Escoge tus colores
                </x-slot>
                <x-slot name="price">
                    $98.00
                </x-slot>
            </x-design.card-offer>
            <x-design.card-offer :link="'#'"> 
                <x-slot name="image">
                    imagen
                </x-slot>
                <x-slot name="trademark">
                    Sax Shields
                </x-slot>
                <x-slot name="name">
                    Kit de Snaker Shields 2 Pares (4 piezas) Escoge tus colores
                </x-slot>
                <x-slot name="price">
                    $98.00
                </x-slot>
            </x-design.card-offer>
            <x-design.card-offer :link="'#'"> 
                <x-slot name="image">
                    imagen
                </x-slot>
                <x-slot name="trademark">
                    Sax Shields
                </x-slot>
                <x-slot name="name">
                    Kit de Snaker Shields 2 Pares (4 piezas) Escoge tus colores
                </x-slot>
                <x-slot name="price">
                    $98.00
                </x-slot>
            </x-design.card-offer>
            <x-design.card-offer :link="'#'"> 
                <x-slot name="image">
                    imagen
                </x-slot>
                <x-slot name="trademark">
                    Sax Shields
                </x-slot>
                <x-slot name="name">
                    Kit de Snaker Shields 2 Pares (4 piezas) Escoge tus colores
                </x-slot>
                <x-slot name="price">
                    $98.00
                </x-slot>
            </x-design.card-offer>
   </div>
   {{--popular--}}
   <div class="container mx-auto bg-white py-4 px-4 my-4 border rounded-lg overflow-hidden shadow-xl">
        <div>
            <span class="text-black font-bold text-center text-4xl">
                Arítulos más comprados
            </span>
            <a href="#" class="text-blue-500 font-extrabold underline text-center text-base hover:text-yellow-500">
                Ver mas
            </a> 
        </div>
        <div class="px-3 md:px-0 py-6 grid grid-cols-1 sm:grid-cols-3 md:grid-cols-4 gap-10">
            <x-design.card-default :link="'#'"> 
                <x-slot name="image">
                    imagen
                </x-slot>
                <x-slot name="trademark">
                    Sax Shields
                </x-slot>
                <x-slot name="name">
                    Kit de Snaker Shields 2 Pares (4 piezas) Escoge tus colores
                </x-slot>
                <x-slot name="price">
                    $98.00
                </x-slot>
            </x-design.card-default>
            <x-design.card-default :link="'#'"> 
                <x-slot name="image">
                    imagen
                </x-slot>
                <x-slot name="trademark">
                    Sax Shields
                </x-slot>
                <x-slot name="name">
                    Kit de Snaker Shields 2 Pares (4 piezas) Escoge tus colores
                </x-slot>
                <x-slot name="price">
                    $98.00
                </x-slot>
            </x-design.card-default>
            <x-design.card-default :link="'#'"> 
                <x-slot name="image">
                    imagen
                </x-slot>
                <x-slot name="trademark">
                    Sax Shields
                </x-slot>
                <x-slot name="name">
                    Kit de Snaker Shields 2 Pares (4 piezas) Escoge tus colores
                </x-slot>
                <x-slot name="price">
                    $98.00
                </x-slot>
            </x-design.card-default>
            <x-design.card-default :link="'#'"> 
                <x-slot name="image">
                    imagen
                </x-slot>
                <x-slot name="trademark">
                    Sax Shields
                </x-slot>
                <x-slot name="name">
                    Kit de Snaker Shields 2 Pares (4 piezas) Escoge tus colores
                </x-slot>
                <x-slot name="price">
                    $98.00
                </x-slot>
            </x-design.card-default>
        </div>
   </div>
   {{--Category--}}
   <div class="container mx-auto bg-white py-4 px-4 my-4 border rounded-lg overflow-hidden shadow-xl">
        <h4 class="text-black font-bold text-center text-4xl">
            Categorías populares
        </h4>
        <section class="px-6 my-3 grid grid-cols-2 sm:grid-cols-3 md:grid-cols-6 gap-1">
            <div class="p-2 md:w-40">
                <div class="flex justify-around items-center px-2 py-3 bg-gray-200 rounded-lg shadow-xs cursor-pointer hover:bg-gray-500 hover:text-gray-100">
                    <svg class="h-6 fill-current hover:text-gray-100" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Symfony icon</title><path d="M19.197 1.608l.003-.006h-4.425L12 6.4v.002l-2.772-4.8H4.803v.005H0l12 20.786L24 1.608"/></svg>
                    <div>
                    <p class="text-xs font-medium ml-2 ">
                        Celulares y accesorios
                    </p>

                    </div>
                </div>
            </div>
            <div class="p-2 md:w-40 ">
                <div class="flex justify-around items-center px-2 py-3 bg-purple-300 rounded-lg shadow-xs cursor-pointer hover:bg-purple-500 hover:text-gray-100">

                    <svg class="h-6 fill-current hover:text-gray-100" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>HTML5 icon</title><path d="M19.197 1.608l.003-.006h-4.425L12 6.4v.002l-2.772-4.8H4.803v.005H0l12 20.786L24 1.608"/></svg>
                    <div>
                    <p class=" text-xs font-medium ml-2 ">
                        Accesorios Vehiculos
                    </p>

                    </div>
                </div>
            </div>
            <div class="p-2 md:w-40 ">
                <div class="flex justify-around items-center px-2 py-3 bg-green-200 rounded-lg shadow-xs cursor-pointer hover:bg-green-500 hover:text-gray-100">

                    <svg class="h-6 fill-current hover:text-gray-100" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Vue.js icon</title><path d="M19.197 1.608l.003-.006h-4.425L12 6.4v.002l-2.772-4.8H4.803v.005H0l12 20.786L24 1.608"/></svg>
                    <div>
                    <p class=" text-xs font-medium ml-2 ">
                        Calzado
                    </p>

                    </div>
                </div>
            </div>
            <div class="p-2 md:w-40 ">
                <div class="flex justify-around items-center px-2 py-3 bg-yellow-200 rounded-lg shadow-xs cursor-pointer hover:bg-yellow-500 hover:text-gray-100">

                    <svg class="h-6 fill-current hover:text-gray-100" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>JavaScript icon</title><path d="M19.197 1.608l.003-.006h-4.425L12 6.4v.002l-2.772-4.8H4.803v.005H0l12 20.786L24 1.608"/></svg>
                    <div>
                    <p class=" text-xs font-medium text-uppercase ml-2 ">
                        Pantalones
                    </p>

                    </div>
                </div>
            </div>
            <div class="p-2 md:w-40 ">
                <div class="flex justify-around items-center px-2 py-3 bg-indigo-200 rounded-lg shadow-xs cursor-pointer hover:bg-indigo-500 hover:text-gray-100">

                    <svg class="h-6 fill-current hover:text-gray-100" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>CSS3 icon</title><path d="M19.197 1.608l.003-.006h-4.425L12 6.4v.002l-2.772-4.8H4.803v.005H0l12 20.786L24 1.608"/></svg>
                    <div>
                    <p class=" text-xs font-medium ml-2 ">
                        Impresoras y ..
                    </p>

                    </div>
                </div>
            </div>
            <div class="p-2 md:w-40 ">
                <div class="flex justify-around items-center px-2 py-3 bg-red-200 rounded-lg shadow-xs cursor-pointer hover:bg-red-500 hover:text-gray-100">

                    <svg class="h-6 fill-current hover:text-gray-100" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title>Laravel icon</title><path d="M19.197 1.608l.003-.006h-4.425L12 6.4v.002l-2.772-4.8H4.803v.005H0l12 20.786L24 1.608"/></svg>
                    <div>
                    <p class=" text-xs font-medium ml-2 ">
                        Accesorios
                    </p>

                    </div>
                </div>
            </div>
        </section>
   </div>
=======
    <x-slot name="header">
        Titulo de showlobby
    </x-slot>
    <div class="mt-8">
        <h2>Hola desde showlobby</h2>
    </div>
>>>>>>> a6a908970292d1f79faa4535318af81bb5cbbadd
</div>
