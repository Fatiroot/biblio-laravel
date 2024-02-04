<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                 
                <div class="col-span-12 mt-5">
                @foreach ($books as $book)

                    <div class="grid gap-2 grid-cols-1 lg:grid-cols-1">
                        <div class="bg-white p-4 shadow-lg rounded-lg mb-4">
                            <h1 class="font-bold text-base">{{ $book->title}}</h1>
                            <div class="mt-4">
                                <div class="flex flex-col">
                                    <div class="-my-2 overflow-x-auto">
                                        <div class="py-2 align-middle inline-block min-w-full">
                                            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg bg-white">
                                                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                                                    <div class="sm:col-span-1">
                                                        <div class="px-4 py-5 sm:px-6">
                                                            <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
                                                                <div class="sm:col-span-1">
                                                                    <dt class="text-sm leading-5 font-medium text-gray-500">Author</dt>
                                                                    <dd class="mt-1 text-sm leading-5 text-gray-900 sm:col-span-2">{{ $book->author}}</dd>
                                                                </div>
                                                                <div class="sm:col-span-1">
                                                                    <dt class="text-sm leading-5 font-medium text-gray-500">Genre</dt>
                                                                    <dd class="mt-1 text-sm leading-5 text-gray-900 sm:col-span-2">{{ $book->genre}}</dd>
                                                                </div>
                                                                <div class="sm:col-span-1">
                                                                    <dt class="text-sm leading-5 font-medium text-gray-500">Description</dt>
                                                                    <dd class="mt-1 text-sm leading-5 text-gray-900 sm:col-span-2">{{ $book->description}}</dd>
                                                                </div>
                                                                <div class="sm:col-span-1">
                                                                    <dt class="text-sm leading-5 font-medium text-gray-500">Publication Year</dt>
                                                                    <dd class="mt-1 text-sm leading-5 text-gray-900 sm:col-span-2">{{ $book->publication_year}}</dd>
                                                                </div>
                                                               <div class="sm:col-span-1">
                                                                    <a href="{{route('reservations.create', $book->id)}}" class="inline-flex items-center px-3 py-2 text-sm font-medium mt-3 mb-3 ext-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                                        Reaserver
                                                                    </a>
                                                                    <div class="grid gap-4 mb-4 grid-cols-2">
    
                                                                <h1 class="float-right text-gray-800 bg-purple-100 text-purple-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-purple-900 dark:text-purple-300 ">{{$book->available_copies }} Copies</h1>

                                                                </div>
                                                            </dl>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                             </div>
                        </div>          
                     </div>
                            
                @endforeach                    
                </div>
            </div>
        </div>
    </div>


    

</x-app-layout>










