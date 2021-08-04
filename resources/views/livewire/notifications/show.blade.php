<div>
<x-Drop.dropdown>
    <x-slot name="trigger">
        <h4 class="cursor-pointer px-2 font-semibold text-lg text-gray-700 capitalize font-poppins tracking-wide hover:bg-gray-200 rounded-md">
            <i class="fa fa-bell mr-2" aria-hidden="true"></i>
            Notificaciones
        </h4>
    </x-slot>

    <x-slot name="content">
        <div class="divide-y divide-gray-400 py-2">
            @forelse($this->notifications as $notification)
                <div wire:click="go_url({{$notification->id}})" class="flex items-center px-1 py-2 hover:bg-gray-200 h-20 cursor-pointer">
                    <div class="w-1/4 flex justify-center items-center">
                        {!! $this->get_icon($notification->type) !!}
                    </div>
                    <div class="w-3/4 pl-1 flex flex-col">
                        {!! $this->get_description($notification) !!}
                    </div>
                </div>
            @empty
                <div class="h-full flex justify-center items-center">
                    <span class="text-gray-300">
                        {{__('¡Sin notificaciones!')}}
                    </span>
                </div>
            @endforelse
        </div>
    </x-slot>
</x-Drop.dropdown>
</div>
