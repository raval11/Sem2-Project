
@extends("layout.main")

@section('main')

@if(request()->session()->get('Role') == 'admin' || request()->session()->get('Role') == 'organizer')
<div class="p-5">
    <button class="px-4 py-2 bg-blue-500 mt-5 text-white w-full" id="event-button">Create Event</button>
</div>
@endif

<div id="create-event-main" class="hidden">
<h1 class="text-center text-3xl mt-8">Create Events</h1>
<div class="container mx-auto mt-8">
    <div class="">
        <div class="mx-auto w-[90%]">
            <form method="POST" action="{{route('create-events')}}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" enctype="multipart/form-data">
                @csrf

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Event_Name</label>
                    <input type="text" class="form-input rounded-md border-gray-300 w-full border h-[40px] p-2" name="event_name" />
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Category</label>
                    <select class="form-select rounded-md border-gray-300 w-full border h-[40px] p-2" name="category">
                        <option value="Business" selected>Business</option>
                        <option value="Exhibitions">Exhibitions</option>
                        <option value="Festivals" >Festivals</option>
                        <option value="Charity" >Charity</option>
                        <option value="Sports" >Sports</option>
                        <option value="Fair" >Fair</option>
                    </select>
                </div>
                {{-- <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Total_Ticket</label>
                    <input type="text" class="form-input rounded-md border-gray-300 w-full border h-[40px] p-2" name="total_sets" />
                </div> --}}
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Ticket_Price</label>
                    <input type="text" class="form-input rounded-md border-gray-300 w-full border h-[40px] p-2" name="ticket_price" />
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">City</label>
                    <input type="text" class="form-input rounded-md border-gray-300 w-full border h-[40px] p-2" name="city" />
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">description</label>
                    <input type="text" class="form-input rounded-md border-gray-300 w-full border h-[40px] p-2" name="description" />
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Image</label>
                    <input type="file" class="form-input rounded-md border-gray-300 w-full border h-[40px] p-2" name="image" />
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Start_Date</label>
                    <input type="date" class="form-input rounded-md border-gray-300 w-full border h-[40px] p-2" name="start_date" />
                </div>
                {{-- <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Starting_Time</label>
                    <input type="time" class="form-input rounded-md border-gray-300 w-full border h-[40px] p-2" name="starting_time" />
                </div> --}}
                <div class="mb-4">
                    <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                        Create Event
                    </button>
                </div>

            </form>
        </div>
    </div>
</div>
</div>

<div>
    <div class="grid lg:grid-cols-3 gap-5 w-[90%] mx-auto my-10 grid-cols-1 md:grid-cols-2">
        @foreach ($event_data as $item )
        <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 mb-5">
            <a href="eventDetails/{{$item->event_id}}">
                <img class="rounded-t-lg h-[200px] w-full object-cover" src="{{$item->image}}" alt="card-image " />
            </a>
            <div class="p-5">
                <a href="eventDetails/{{$item->event_id}}">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$item->event_name}}</h5>
                </a>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{substr($item->description,0,200)}}</p>
                <a href="eventDetails/{{$item->event_id}}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Read more
                     <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                    </svg>
                </a>
            </div>
        </div>
        @endforeach
</div>
</div>







<script>
    let eventbutton = document.getElementById("event-button")
    let createeventmain = document.getElementById("create-event-main")
    const toggleVisibility  = () =>{

        if (createeventmain.style.display === "none") {
            createeventmain.style.display = "block";
            } else {
                createeventmain.style.display = "none";
            }

    }
    eventbutton.addEventListener("click",toggleVisibility)
</script>

@endsection
