
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
                                                            <span class="mr-2">name</span>
                                                        </div>
                                                    </th>
                                    
                                                    <th
                                                        class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                        <div class="flex cursor-pointer">
                                                            <span class="mr-2">Email</span>
                                                        </div>
                                                    </th>

                                                    <th
                                                        class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                        <div class="flex cursor-pointer">
                                                            <span class="mr-2">Role</span>
                                                        </div>
                                                    </th>
                                                    <th
                                                        class="px-6 py-3 bg-gray-50 text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                                        <div class="flex cursor-pointer">
                                                            <span class="mr-2">Created at</span>
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
                                                @foreach ($users as $user)
                                                <tr>
                                                    <td
                                                        class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                        {{ $user->name }}
                                                    </td>
                                                    <td
                                                        class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                        {{ $user->email }}
                                                    </td>
                                                    <td
                                                        class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                        {{ $user->role->name }}
                                                    
                                                    </td>
                                                    <td
                                                        class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                        {{ $user->created_at }}
                                                    
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-no-wrap text-sm leading-5">
                                                          
                                                        <form action="{{route('users.destroy', $user->id)}}" method="Post">
                                                        @csrf
                                                        @method('delete')
                                                            <input type="hidden" name="id" value="">
                                                            <button type="submit" name="delete" style="background: none; border: none;">
                                                            <a href="" ><i class="fa-solid fa-trash"></i></a>
                                                            </button>
                                                        </form>
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
</main>