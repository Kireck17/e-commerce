@props(['files'])
<div class="flex flex-col sm:flex-row lg:w-1/2" x-data="{{ json_encode(['files' => $files, 'active' => 0]) }}">
    <div class="w-full sm:w-11/12 flex justify-center py-3">
        <template x-for="(file,key) in files">
            <img x-show="active === key" :src="file.url" class="w-auto h-60 sm:h-96 rounded-md shadow-md" alt="">
        </template>
    </div>
    <div class="w-full sm:w-1/12 flex flex-row sm:flex-col justify-center items-center space-x-3 sm:space-y-3 py-3 px-2">
        <template x-for="(file,key) in files">
            <img class="w-10 h-10 rounded-md shadow-md cursor-pointer" :src="file.url" x-on:click="active=key">
        </template>
    </div>
</div>