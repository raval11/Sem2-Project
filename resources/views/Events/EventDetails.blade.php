
@extends("layout.main")

@section('main')


<div class="p-5 grid  grid-cols-1 gap-10 w-full md:w-[80%] mx-auto">

    <div class="mx-auto">
        <h6 class="p-5 font-bold text-2xl text-center">Event Details</h6>
        <img src="../../../{{$event_data->image}}" alt="Image Loading" class="max-w-full md:h-[500px] h-[200px]">
    </div>

    <div>
        <p class="font-bold text-2xl">{{$event_data->event_name}}</p>
        <p class="font-bold text-xl">{{$event_data->category}}</p>
        <p class="mt-5 text-xl">{{$event_data->description}}</p>
        <p class="text-xl">{{$event_data->description}}</p>
        <p class="font-bold text-xl mt-5">{{$event_data->city}}</p>
        <p class="font-bold text-xl mt-2">Ticket Price =  {{$event_data->ticket_price}}</p>
        <p class="font-bold text-xl mt-2">{{$event_data->start_date}}</p>
        {{-- ['id' => $data->planeid]) --}}

        @if(request()->session()->get('success'))
        <a href="{{route('Eventpayments',['id' => $event_data->event_id])}}">
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mt-2">Participant in Event</button>
        </a>
        @endif
    </div>
</div>



@endsection
