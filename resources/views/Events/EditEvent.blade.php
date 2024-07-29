
@extends("layout.main")

@section('main')

<div id="create-event-main">
    <h1 class="text-center text-3xl mt-8">Edit Event</h1>
    <div class="container mx-auto mt-8">
        <div class="">
            <div class="mx-auto w-[70%]">
                <form method="POST" action="{{route('update-events',$event_data->event_id)}}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Event_Name</label>
                        <input type="text" class="form-input rounded-md border-gray-300 w-full border h-[40px] p-2" name="event_name"  value={{$event_data->event_name}} />
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Category</label>
                        <select class="form-select rounded-md border-gray-300 w-full border h-[40px] p-2" name="category" value={{$event_data->category}} >
                            <option value="Business">Business</option>
                            <option value="Exhibitions">Exhibitions</option>
                            <option value="Festivals" >Festivals</option>
                            <option value="Charity" >Charity</option>
                            <option value="Sports" >Sports</option>
                            <option value="Fair" >Fair</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Ticket_Price</label>
                        <input type="text" class="form-input rounded-md border-gray-300 w-full border h-[40px] p-2" name="ticket_price" value="{{$event_data->ticket_price}}"/>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">City</label>
                        <input type="text" class="form-input rounded-md border-gray-300 w-full border h-[40px] p-2" name="city" value="{{$event_data->city}}"/>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">description</label>
                        <input type="text" class="form-input rounded-md border-gray-300 w-full border h-[40px] p-2" name="description" value="{{$event_data->description}}"/>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Image</label>
                        <input type="file" class="form-input rounded-md border-gray-300 w-full border h-[40px] p-2" name="image" value="{{$event_data->image}}"/>
                    </div>
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Start_Date</label>
                        <input type="date" class="form-input rounded-md border-gray-300 w-full border h-[40px] p-2" name="start_date" value="{{$event_data->start_date}}"/>
                    </div>



                    <div class="mb-4">
                        <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                            Edit Event
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
    </div>

    @endsection
