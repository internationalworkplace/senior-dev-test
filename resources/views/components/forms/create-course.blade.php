<form class="px-4 py-6 sm:p-8 w-5/5 sm:w-3/5 md:w-2/5" action="{{ route('course.create') }}" method="POST">
    @csrf
    <div class="grid grid-cols-3 gap-4 sm:grid-cols-3">
        <div class="col-span-full">
            <label for="title" class="block text-sm font-medium leading-6 text-gray-900">Course Title</label>
            <div class="mt-2">
                <input type="text" name="title" id="title" autocomplete="off"
                       class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        </div>

        <div class="col-span-full">
            <label for="description" class="block text-sm font-medium leading-6 text-gray-900">Course
                Description</label>
            <div class="mt-2">
                    <textarea rows="4" name="description" id="description"
                              class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
            </div>
        </div>

        <div class="col-span-full">
            <label for="title" class="block text-sm font-medium leading-6 text-gray-900">URL Slug</label>
            <div class="mt-2">
                <input type="text" name="title" id="title" autocomplete="off"
                       class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
            </div>
        </div>

        <div class="col-span-full">
            <label for="trainer" class="block text-sm font-medium leading-6 text-gray-900">Assign to Trainer</label>
            <select id="trainer" name="trainer" class="mt-2 block w-full rounded-md border-0 py-1.5 pl-3 pr-10 text-gray-900 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-indigo-600 sm:text-sm sm:leading-6">
                @foreach ($trainers as $trainer)
                    <option value="{{ $trainer->id }}">{{ $trainer->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="col-span-full">
            <button type="submit"
                    class="bg-gradient-to-b from-[#FFB100] to-[#FF6600] flex justify-center w-full px-4 py-3 text-sm font-medium text-white border border-transparent hover:border-orange-600 hover:font-semibold focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                Create
            </button>
        </div>
    </div>
</form>
