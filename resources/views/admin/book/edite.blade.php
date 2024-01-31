@include('partials.dashboard')
<div class="flex justify-center items-center h-screen">
  <form method="post" action="{{route('books.update', $book->id)}}" class="bg-white p-8 rounded-lg shadow-md w-full sm:max-w-md">
   @csrf
   @method('PUT')
    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                        <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            title
                        </label>
                        <input type="text" name="title"  id="title"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder=" Title" value="{{old('title',$book->title)}}" >
                        
                    </div>
                    <div class="sm:col-span-2">
                        <label for="author" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Author </label>
                        <input type="text" name="author" id="author"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="author" value="{{old('author',$book->author)}}">

                    </div>
                    <div class="sm:col-span-2">
                        <label for="genre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Genre </label>
                            <input type="text" name="genre"  id="genre"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="genre" value="{{old('genre',$book->genre)}}">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="publication_year"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Publication year </label>
                        <input type="date" name="publication_year"  id="publication_year"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="publication_year" value="{{old('publication_year',$book->publication_year)}}">

                    </div>
                    <div class="sm:col-span-2">
                        <label for="total_copies" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Total copies </label>
                        <input type="number" name="total_copies"  id="total_copies"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="total_copies" value="{{old('total_copies',$book->total_copies)}}">
                    </div>
                    <div class="sm:col-span-2">
                        <label for="available_copies"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Available copies </label>
                        <input type="number" name="available_copies" id="available_copies"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="available_copies" value="{{old('available_copies',$book->available_copies)}}">

                    </div>
                    <div class="sm:col-span-2">
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Description </label>
                        <textarea name="description" value="" id="description"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="description">{{old('description',$book->description)}}</textarea>
                    </div>
                    </div>

                <button name="edite" type="submit" class="mt-6 w-full inline-flex items-center justify-center bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 text-white font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                Update book
                </button>
                </form>
                </div>
