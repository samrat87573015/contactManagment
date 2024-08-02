<x-layout>
    <div class="home_page bg-gray-300">
        <div class="container">
            <div class="home_wrapper w-full h-screen flex items-center justify-center">
                <div class="w-[400px] py-5 px-5 bg-white text-center rounded shadow-md">
                    <h1 class="text-center text-4xl font-bold mb-5">Contact Management Application</h1>
                    <div class="btn_area">
                        <a href="{{route('contacts.index')}}" class="block px-5 py-2 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600 mb-3">View Contacts</a>
                        <a href="{{route('contacts.create')}}" class="block px-5 py-2 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600">Create New Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
