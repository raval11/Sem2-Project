@extends("layout.main")

@section('main')



@include("Admin.Profile",compact("user_data"));


@if(request()->session()->get('Role') == 'admin' || request()->session()->get('Role') == 'organizer')
<div class="relative overflow-x-auto shadow-md sm:rounded-lg w-[80%] mx-auto ">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                     image
                </th>
                <th scope="col" class="px-6 py-3">
                    event_name
                </th>
                <th scope="col" class="px-6 py-3">
                    city
                </th>
                <th scope="col" class="px-6 py-3">
                    Category
                </th>
                <th class="px-6 py-4  text-red-600 dark:text-red-500 hover:underline">
                   Delte
                </th>
                <th class="px-6 py-4  text-green-600 dark:text-green-500 hover:underline">
                    Edit
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($event_data as $item )

            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
<a href="eventDetails/{{$item->event_id}}">
    <img src="{{$item->image}}" alt="" class="h-[200px] w-[250px] ">
</a>
                </th>
                <td class="px-6 py-4">
                    {{$item->event_name}}
                </td>
                <td class="px-6 py-4">
                    {{$item->city}}
                </td>
                <td class="px-6 py-4">
                   {{$item->category}}
                </td>
                <td class="px-6 py-4">
                    <a href="{{route('delete-events', ['id' => $item->event_id])}}" class="font-medium text-red-600 dark:text-red-500 hover:underline">Delete</a>
                </td>
                <td class="px-6 py-4">
                    <a href="{{route('update-events', ['id' => $item->event_id])}}" class="font-medium text-green-600 dark:text-green-500 hover:underline">Edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endif


@if(request()->session()->get('Role') == 'admin')
@include("Admin.UserTable",compact('all_user_data'));
@endif






@endsection
