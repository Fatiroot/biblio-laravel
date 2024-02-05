
@include('partials.dashboard')
<main class="">
    <div class="grid mb-4 pb-10 px-8 mx-4 rounded-3xl bg-gray-100 border-4 border-green-400">     
        
                <div class="col-span-12 mt-5">
                    <div class="grid gap-2 grid-cols-1 lg:grid-cols-1">
                        <div class="bg-white p-4 shadow-lg rounded-lg">
                            <h1 class="font-bold text-base">Table</h1>
                            <div class="mt-4">
                                <div class="flex flex-col">
                                    <div class="-my-2 overflow-x-auto">
                                        <div class="py-2 align-middle inline-block min-w-full">
                                            <div
                                                class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg bg-white">
                                                <table class="min-w-full divide-y divide-gray-200">
                                                    <thead>
                                                        <tr>
                                                            <th
                                                                class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                <div class="flex cursor-pointer">
                                                                    <span class="mr-2">Description</span>
                                                                </div>
                                                            </th>
                                                            <th
                                                                class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                <div class="flex cursor-pointer">
                                                                    <span class="mr-2">Reservation Date</span>
                                                                </div>
                                                            </th>
                                                            <th
                                                                class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                <div class="flex cursor-pointer">
                                                                    <span class="mr-2">Return Date</span>
                                                                </div>
                                                            </th>
                                                            <th
                                                                class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                <div class="flex cursor-pointer">
                                                                    <span class="mr-2">Is Returnd</span>
                                                                </div>
                                                            </th>
                                                            <th
                                                                class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                <div class="flex cursor-pointer">
                                                                    <span class="mr-2">User</span>
                                                                </div>
                                                            </th>
                                                            <th
                                                                class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                <div class="flex cursor-pointer">
                                                                    <span class="mr-2">Book</span>
                                                                </div>
                                                            </th>
                                                            <th
                                                                class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                                <div class="flex cursor-pointer">
                                                                    <span class="mr-2">ACTION</span>
                                                                </div>
                                                            </th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="bg-white divide-y divide-gray-200" id="tableBody">
                                                        @foreach ($reservations as $reservation)
                                                        <tr>
                                                            <td
                                                                class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                {{ $reservation->description }}
                                                            </td>
                                                            <td
                                                                class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                {{ $reservation->reservation_date }}
                                                            </td>
                                                            <td
                                                                class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                {{ $reservation->return_date }}
                                                            
                                                            </td>
                                                            <td
                                                                class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                
                                                                {{ $reservation->is_returned }}
                                                            </td>
                                                            <td
                                                                class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                {{ $reservation->user->name}}
                                                            
                                                            </td>
                                                            <td
                                                                class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                
                                                                {{ $reservation->book->title }}
                                                            </td>
                                                            <td
                                                                class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                                {{ $reservation->available_copies }}
                                                            
                                                            </td>
                                                            <td>
                                            
                                                                <form action="{{route('reservations.edit', $reservation->id)}}" method="get">
                                                                @csrf
                                                                        <input type="hidden" name="id" value="">
                                                                        <button type="submit" name="editId" style="background: none; border: none;">
                                                                        <a href=""><i class="fa-solid fa-pen"></i></a>
                                                                        </button>
                                                                </form>

                                                                <form action="{{route('reservations.destroy', $reservation->id)}}" method="Post">
                                                                @csrf
                                                                @method('delete')
                                                                    <input type="hidden" name="id" value="">
                                                                    <button type="submit" name="delete" style="background: none; border: none;">
                                                                    <a href="" ><i class="fa-solid fa-trash"></i></a>
                                                                    </button>
                                                                </form>
                                                                </td>
                                                            
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
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
    </div>
</main>
   