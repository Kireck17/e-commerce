<div class="p-3">
    <button onclick="openModal(true)" class="bg-green-800 hover:bg-green-600 px-4 py-2 rounded text-white focus:outline-none">
        Open Modal
    </button>
</div>

<!-- overlay -->
<div id="modal_overlay" class="hidden absolute inset-0 bg-black bg-opacity-30 h-screen w-full flex justify-center items-start md:items-center pt-10 md:pt-0">

<!-- modal -->
<div id="modal" class="pacity-0 transform -translate-y-full scale-150  relative w-10/12 md:w-1/2 h-1/2 md:h-3/4 bg-white rounded shadow-lg transition-opacity transition-transform duration-300">

    <!-- button close -->
    <button 
    onclick="openModal(false)"
    class="absolute -top-3 -right-3 bg-red-500 hover:bg-red-600 text-2xl w-10 h-10 rounded-full focus:outline-none text-white">
    &cross;
    </button>

    <!-- header -->
    <div class="px-4 py-3 border-b border-gray-200">
    <h2 class="text-xl font-semibold text-gray-600">Editar Attributo</h2>
    </div>

    <!-- body -->
    <div class="w-full p-3">
        <livewire:admin.form.atributo-value/>
    </div>

    <!-- footer -->
    <div class="absolute bottom-0 left-0 px-4 py-3 border-t border-gray-200 w-full flex justify-end items-center gap-3">
    <button class="bg-green-500 hover:bg-green-600 px-4 py-2 rounded text-white focus:outline-none">Save</button>
    <button 
        onclick="openModal(false)"
        class="bg-red-500 hover:bg-red-600 px-4 py-2 rounded text-white focus:outline-none"
    >Close</button>
    </div>
</div>

</div>

<script>
const modal_overlay = document.querySelector('#modal_overlay');
const modal = document.querySelector('#modal');

function openModal (value){
    const modalCl = modal.classList
    const overlayCl = modal_overlay

    if(value){
    overlayCl.classList.remove('hidden')
    setTimeout(() => {
        modalCl.remove('opacity-0')
        modalCl.remove('-translate-y-full')
        modalCl.remove('scale-150')
    }, 100);
    } else {
    modalCl.add('-translate-y-full')
    setTimeout(() => {
        modalCl.add('opacity-0')
        modalCl.add('scale-150')
    }, 100);
    setTimeout(() => overlayCl.classList.add('hidden'), 300);
    }
}
openModal(true)
</script>