@props(['style' => session('flash.bannerStyle', 'success'),'message' => session('flash.banner')])

<div x-data="{{ json_encode(['show' => true, 'style' => $style, 'message' => $message]) }}"
            class="mt-3 rounded-lg fixed top-16 right-0 z-0 w-3/5 sm:w-2/5"
            :class="{
                'bg-gradient-to-r from-green-800 via-green-700 to-green-600': style == 'success',
                'bg-gradient-to-r from-yellow-500 via-yellow-400 to-yellow-300': style == 'warning',
                'bg-gradient-to-r from-blue-500 via-blue-400 to-blue-300': style == 'info',
                'bg-gradient-to-r from-red-500 via-red-400 to-red-300': style == 'danger'
            }"
            style="display: none;"
            x-show="show && message"
            x-init="
                document.addEventListener('banner-message', event => {
                    style = event.detail.style;
                    message = event.detail.message;
                    show = true;
                    setTimeout(() => show=false, 4500);
                });
            ">
    <div class="max-w-screen-xl mx-auto py-2 px-3 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between flex-wrap">
            <div class="w-0 flex-1 flex items-center min-w-0">
                <span class="flex p-2 rounded-lg" class="shadow-md">
                    <i :class="{
                        'fas fa-check-circle text-white': style == 'success',
                        'fas fa-info-circle text-white': style == 'info',
                        'fas fa-exclamation-circle text-white': style == 'warning',
                        'fas fa-times-circle text-white': style == 'danger'
                    }"></i>
                </span>

                <p class="ml-3 font-medium text-sm text-white truncate" x-text="message"></p>
            </div>

            <div class="flex-shrink-0 sm:ml-3">
                <button
                    type="button"
                    class="-mr-1 flex p-2 rounded-md focus:outline-none sm:-mr-2 transition ease-in-out duration-150"
                    aria-label="Dismiss"
                    x-on:click="show = false"
                    x-on:click.away="show = false">
                        <i class="fas fa-times text-lg font-bold text-gray-200"></i>
                </button>
            </div>
        </div>
    </div>
</div>