<div class="max-w-screen-lg mx-auto">
    <!-- header -->
    <header class="flex items-center justify-between py-2">
      <a href="#" class="px-2 lg:px-0 font-bold capitalize">
        Sax Blog
      </a>
    </header>
    <!-- header ends here -->

    <main class="mt-5">
      <!-- featured section -->
      <div class="flex flex-wrap md:flex-no-wrap space-x-0 md:space-x-6 mb-16">
        <!-- main post -->
        <div class="mb-4 lg:mb-0  p-4 lg:p-0 w-full md:w-4/7 relative rounded block">
          <img src="https://images.unsplash.com/photo-1427751840561-9852520f8ce8?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60" class="rounded-md object-cover w-full h-64">
          <span class="text-green-700 text-sm hidden md:block mt-4"> Technology </span>
          <h1 class="text-gray-800 text-4xl font-bold mt-2 mb-2 leading-tight">
            Ignorant branched humanity led now marianne too.
          </h1>
          <p class="text-gray-600 mb-4">
            Necessary ye contented newspaper zealously breakfast he prevailed. Melancholy middletons yet understood
            decisively boy law she. Answer him easily are its barton little. Oh no though mother be things simple
            itself.
            Oh be me, sure wise sons, no. Piqued ye of am spirit regret. Stimulated discretion impossible admiration in particular conviction up.
          </p>
          <a href="{{route('info')}}" :active="request()->routeIs('info')" class="inline-block px-6 py-3 mt-2 rounded-md bg-green-700 text-gray-100">
            Read more
          </a>
        </div>

      </div>
      <!-- end featured section -->


      <!-- recent posts -->
      <div class="flex mt-16 mb-4 px-4 lg:px-0 items-center justify-between">
        <h2 class="font-bold text-3xl">Latest news</h2>
      </div>
      <div class="block space-x-0 lg:flex lg:space-x-6">

        <div class="rounded w-full lg:w-1/2 lg:w-1/3 p-4 lg:p-0">
          <img src="https://images.unsplash.com/photo-1526666923127-b2970f64b422?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60" class="rounded" alt="technology" />
          <div class="p-4 pl-0">
            <h2 class="font-bold text-2xl text-gray-800">Put all speaking her delicate recurred possible.</h2>
            <p class="text-gray-700 mt-2">
              Set indulgence inquietude discretion insensible bed why announcing. Middleton fat two satisfied additions.
              So continued he or commanded household smallness delivered. Door poor on do walk in half. Roof his head the what.
            </p>

            <a  href="{{route('info')}}" :active="request()->routeIs('info')" class="inline-block py-2 rounded text-green-900 mt-2 ml-auto"> Read more </a>
          </div>
        </div>

        <div class="rounded w-full lg:w-1/2 lg:w-1/3 p-4 lg:p-0">
          <img src="https://images.unsplash.com/photo-1504384764586-bb4cdc1707b0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=900&q=60" class="rounded" alt="technology" />
          <div class="p-4 pl-0">
            <h2 class="font-bold text-2xl text-gray-800">Is at purse tried jokes china ready decay an. </h2>
            <p class="text-gray-700 mt-2">
              Small its shy way had woody downs power. To denoting admitted speaking learning my exercise so in. 
              Procured shutters mr it feelings. To or three offer house begin taken am at. 
            </p>

            <a href="{{route('info')}}" :active="request()->routeIs('info')" class="inline-block py-2 rounded text-green-900 mt-2 ml-auto"> Read more </a>
          </div>
        </div>

        <div class="rounded w-full lg:w-1/2 lg:w-1/3 p-4 lg:p-0">
          <img src="https://images.unsplash.com/photo-1483058712412-4245e9b90334?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2100&q=80" class="rounded" alt="technology" />
          <div class="p-4 pl-0">
            <h2 class="font-bold text-2xl text-gray-800">As dissuade cheerful overcame so of friendly he indulged unpacked.</h2>
            <p class="text-gray-700 mt-2">
              Alteration connection to so as collecting me. 
              Difficult in delivered extensive at direction allowance. 
              Alteration put use diminution can considered sentiments interested discretion.
            </p>

            <a href="{{route('info')}}" :active="request()->routeIs('info')" class="inline-block py-2 rounded text-green-900 mt-2 ml-auto"> Read more </a>
          </div>
        </div>

      </div>
      <!-- end recent posts -->
    </main>
    <!-- main ends here -->
    </footer>
  </div>