<div>
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
    <div class="bg-blue-900  flex items-center justify-center min-h-screen bg-gray-400">
        <div class="col-span-12 bg-red-900 w-full">
            <div class="bg-yellow-900 overflow-auto lg:overflow-visible ">
                <table class="pl-7 pr-7 w-full table text-gray-400 border-separate space-y-6 text-sm">
                    <thead class="bg-gray-800 text-gray-500">
                        <tr>
                            <th class="p-3">marca</th>
                           
                            <th class="p-3 text-left">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @forelse($trademark as $mark) 
                        <tr class="bg-gray-800">
                                <td class="p-3">
                                {{$mark->name}}
                                </td>
                    @empty
                    
                    @endforelse
                            
                            <td class="p-3 ">
                                <a href="#" class="text-gray-400 hover:text-gray-100 mr-2">
                                    <i class="material-icons-outlined text-base">visibility</i>
                                </a>
                                <a href="#" class="text-gray-400 hover:text-gray-100  mx-2">
                                    <i class="material-icons-outlined text-base">edit</i>
                                </a>
                                <a href="#" class="text-gray-400 hover:text-gray-100  ml-2">
                                    <i class="material-icons-round text-base">delete_outline</i>
                                </a>
                            </td>
                        </tr>
                      
                    </tbody>
                    
                </table>
            </div>
            
        </div>
    </div>
    <div class="bg-white px-4 py-3 border-t border-gray-200 sm:px-6">
        {{$trademark->links()}}
    </div>
    <style>
        .table {
            border-spacing: 0 15px;
        }

        i {
            font-size: 1rem !important;
        }

        .table tr {
            border-radius: 20px;
        }

        tr td:nth-child(n+5),
        tr th:nth-child(n+5) {
            border-radius: 0 .625rem .625rem 0;
        }

        tr td:nth-child(1),
        tr th:nth-child(1) {
            border-radius: .625rem 0 0 .625rem;
        }
    </style>
</div>
