<x-layout>
    <div class="show_single_contact bg-gray-300">
        <div class="container">
            <div class="single_wrapper w-full h-screen flex items-center justify-center">
                <div class="w-[300px] py-5 px-5 bg-white text-center rounded shadow-md">
                    <div class="img w-[80px] h-[80px] rounded-full bg-[#2563EB] text-center leading-[80px] mx-auto mb-3">
                        <span class="uppercase text-white text-2xl font-bold">{{substr($contact->name, 0,2)}}</span>
                    </div>
                    <h2 class="text-4xl font-bold capitalize mb-3">{{$contact->name}}</h2>
                    <div class="coninfo">
                        <ul>
                            <li><a href="mailto:example@gmail.com">Email: {{$contact->email}}</a></li>
                            @if($contact->phone != null)
                            <li><a href="tel:+16102347148">Phone: {{$contact->phone}}</a></li>
                            @endif
                            @if($contact->address != null)
                            <li>Address: {{$contact->address}}</li>
                            @endif
                            <li class="mt-2"> Created Date: {{$contact->created_at}}</li>
                            <li> Update Date: {{$contact->updated_at}}</li>
                        </ul>
                    </div>
                    <div class="back_btn mt-5">
                        <a class="btn_primary" href="{{route('contacts.index')}}">Back to Contacts</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
