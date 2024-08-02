<x-layout>

    <section class="edit_contact bg-gray-100">
        <div class="mx-auto container px-4 py-16 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 gap-x-16 gap-y-8 max-w-[800px] mx-auto">

                <div class="rounded-lg bg-white p-8 shadow-lg lg:col-span-3 lg:p-12">
                    <h2 class="text-center text-4xl font-bold mb-5">Update Contact</h2>
                    <form action="{{route('contacts.update', $contact->id)}}" method="post" class="space-y-4">
                        @csrf
                        @method('PUT')
                        <div>
                            <label class="sr-only" for="name">Name</label>
                            <input
                                class="w-full rounded-lg border border-gray-200 p-3 text-sm"
                                placeholder="Name"
                                name="name"
                                type="text"
                                id="name"
                                value="{{$contact->name}}"
                            />
                        </div>

                        <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                            <div>
                                <label class="sr-only" for="email">Email</label>
                                <input
                                    class="w-full rounded-lg border border-gray-200 p-3 text-sm"
                                    placeholder="Email address"
                                    type="email"
                                    name="email"
                                    id="email"
                                    value="{{$contact->email}}"
                                />
                            </div>

                            <div>
                                <label class="sr-only" for="phone">Phone</label>
                                <input
                                    class="w-full rounded-lg border border-gray-200 p-3 text-sm"
                                    placeholder="Phone Number"
                                    type="tel"
                                    id="phone"
                                    name="phone"
                                    value="{{$contact->phone}}"
                                />
                            </div>
                        </div>

                        <div>
                            <label class="sr-only" for="phone">Address</label>
                            <input
                                class="w-full rounded-lg border border-gray-200 p-3 text-sm"
                                placeholder="Address"
                                type="text"
                                id="address"
                                name="address"
                                value="{{$contact->address}}"
                            />
                        </div>


                        <div class="mt-4">
                            <button
                                type="submit"
                                class="flex items-center justify-center w-1/2 px-5 py-2 text-sm tracking-wide text-white transition-colors duration-200 bg-blue-500 rounded-lg shrink-0 sm:w-auto gap-x-2 hover:bg-blue-600 dark:hover:bg-blue-500 dark:bg-blue-600"
                            >
                                Update Contact
                            </button>
                        </div>
                    </form>
                    @if ($errors->any())
                        <div class="mt-3">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li class="text-red-500 text-sm italic">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
</x-layout>
