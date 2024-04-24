@extends('layout.main')

@section('main')
    <h2 class="text-center text-2xl ">ITS TIME TO CELEBRATE! THE</h2>
    <h2 class="text-center text-2xl ">BEST <span class="text-blue-600">EVENT ORGANIZERS</span></h2>
    <div class="text-center mt-4">
        <button class="border px-4 py-2  bg-blue-600  text-white rounded-md">Contact Us</button>
    </div>

    {{-- <div class="flex mt-4 overflow-hidden gap-5">
        @for ($i = 0; $i < 6; $i++)
            <div class="h-[300px] w-[300px] border bg-gray-500 shadow-lg hover:scale-x-[2] a">
                <img src="{{ asset('asset/image/2.jpg')}}" alt="" class="w-[100%] h-[100%]">
            </div>
        @endfor
    </div> --}}

    <h2 class="text-2xl  text-center my-10">OVER <span class="text-blue-600">SCRVICES</span></h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3">
        @for ($i = 0; $i < 6; $i++)
            <div
                class="border flex flex-col items-center p-5 shadow-lg hover:bg-blue-500 hover:text-white transition-all a ">
                <div class="h-[50px] w-[50px] rounded-full bg-red-500 mt-3"></div>
                <p class="text-xl">Vanue Selection</p>
                <div class="mt-3">
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reiciendis ipsa quae porro exercitationem!
                    </p>
                </div>
            </div>
        @endfor
    </div>

    <h2 class="text-center text-2xl  my-10">ABOUT <span class="text-blue-600">US</span></h2>

    <div class="grid grid-cols-1 md:grid-cols-2 w-[90%] mx-auto gap-5">
        <div>
            <div class="border shadow-lg  ">
                <img src="{{ asset('asset/image/2.jpg')}}" alt="" class="w-[100%] h-[100%]">
            </div>
        </div>
        <div>
            <div>
                <p class="text-4xl">We Will Give A Very Special </p>
                <p class="text-4xl">Celebration For You</p>
            </div>
            <div class="mt-4">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquid dicta ab temporibus vel, dolore in
                    ducimus earum consequatur beatae cumque. Rerum cum dolorum eligendi nesciunt molestias ipsum quia sint
                    repellat!</p>
                <p class="mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi modi dignissimos beatae
                    fugiat molestias tempora?</p>
                <button class="border px-4 py-2 bg-blue-600 text-white rounded-md mt-4">Contact Us</button>
            </div>
        </div>
    </div>

    <h2 class="text-center text-2xl  my-10">OUR <span class="text-blue-600">GALLERY</span></h2>
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-5 grid-cols-1 w-[90%] mx-auto">
        @for ($i = 0; $i < 9; $i++)
            <div class="h-[230px] p-5 border-4 rounded-lg bg-black">
                    <img src="{{ asset('asset/image/2.jpg')}}" alt="" class="w-[100%] h-[100%]">
            </div>
        @endfor
    </div>

    <h2 class="text-center text-2xl  my-10">OUR <span class="text-blue-600">PRICE</span></h2>
    <div class=py-5 sm:py-5">
        <div class="mx-auto max-w-7xl px-6 lg:px-8">
            @for ($i = 0; $i < 2; $i++)
                <div class="mx-auto mt-8 max-w-2xl rounded-3xl ring-1 ring-gray-200 sm:mt-5 lg:mx-0 lg:flex lg:max-w-none">
                    <div class="p-5 sm:p-3 lg:flex-auto">
                        <h3 class="text-2xl font-bold tracking-tight text-gray-900">Lifetime membership</h3>
                        <p class="mt-6 text-base leading-7 text-gray-600">Lorem ipsum dolor sit amet consect etur
                            adipisicing elit. Itaque amet indis perferendis blanditiis repellendus etur quidem assumenda.
                        </p>
                        <div class="mt-10 flex items-center gap-x-4">
                            <h4 class="flex-none text-sm font-semibold leading-6 text-indigo-600">What’s included</h4>
                            <div class="h-px flex-auto bg-gray-100"></div>
                        </div>
                        <ul role="list"
                            class="mt-8 grid grid-cols-1 gap-4 text-sm leading-6 text-gray-600 sm:grid-cols-2 sm:gap-6">
                            <li class="flex gap-x-3">
                                <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                        clip-rule="evenodd" />
                                </svg>
                                Private forum access
                            </li>
                            <li class="flex gap-x-3">
                                <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                        clip-rule="evenodd" />
                                </svg>
                                Member resources
                            </li>
                            <li class="flex gap-x-3">
                                <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                        clip-rule="evenodd" />
                                </svg>
                                Entry to annual conference
                            </li>
                            <li class="flex gap-x-3">
                                <svg class="h-6 w-5 flex-none text-indigo-600" viewBox="0 0 20 20" fill="currentColor"
                                    aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M16.704 4.153a.75.75 0 01.143 1.052l-8 10.5a.75.75 0 01-1.127.075l-4.5-4.5a.75.75 0 011.06-1.06l3.894 3.893 7.48-9.817a.75.75 0 011.05-.143z"
                                        clip-rule="evenodd" />
                                </svg>
                                Official member t-shirt
                            </li>
                        </ul>
                    </div>
                    <div class="-mt-2 p-2 lg:mt-0 lg:w-full lg:max-w-md lg:flex-shrink-0">
                        <div
                            class="rounded-2xl bg-gray-50 py-10 text-center ring-1 ring-inset ring-gray-900/5 lg:flex lg:flex-col lg:justify-center lg:py-16">
                            <div class="mx-auto max-w-xs px-8">
                                <p class="text-base font-semibold text-gray-600">Pay once, own it forever</p>
                                <p class="mt-6 flex items-baseline justify-center gap-x-2">
                                    <span class="text-5xl font-bold tracking-tight text-gray-900">$349</span>
                                    <span class="text-sm font-semibold leading-6 tracking-wide text-gray-600">USD</span>
                                </p>
                                <a href="#"
                                    class="mt-10 block w-full rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Get
                                    access</a>
                                <p class="mt-6 text-xs leading-5 text-gray-600">Invoices and receipts available for easy
                                    company reimbursement</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endfor

        </div>
    </div>

        <h2 class="text-center text-2xl  my-10 text-blue-600">CONTACT <span class="text-black">US</span></h2>
            <div class="lg:w-[70%] w-full mx-auto grid grid-cols-1 lg:grid-cols-2 gap-5 p-10 border-4v rounded-lg border-blue-600 bg-white">
                <input type="text" class="h-[40px] w-full border outline-none p-2 rounded-md" placeholder="Name">
                <input type="text" class="h-[40px] w-full border outline-none p-2 rounded-md" placeholder="Email">
                <input type="text" class="h-[40px] w-full border outline-none p-2 rounded-md" placeholder="Number">
                <input type="text" class="h-[40px] w-full border outline-none p-2 rounded-md" placeholder="Subject">
                <textarea name="" id="" cols="7" rows="7" class="col-span-1 lg:col-span-2 resize-none border outline-none p-2" placeholder="Your Message"></textarea>
        </div>
        <div class="text-center mt-4 col-span-2">
            <button class="border px-4 py-2  bg-blue-600  text-white rounded-md">Send Message</button>
        </div>



@endsection
