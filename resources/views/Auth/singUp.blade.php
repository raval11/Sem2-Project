
@extends("layout.main")

@section('main')

<h1 class="text-center text-3xl mt-8">Registration</h1>
<div class="container mx-auto mt-8">
    <div class="">
        <div class="mx-auto w-[90%]">
            <form method="POST" action="SingUp" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @csrf

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Name</label>
                    <input type="text" class="form-input rounded-md border-gray-300 w-full border h-[40px] p-2" name="Name" required/>
                    {{-- <p>@error('Name'){{$message}} @enderror</p> --}}
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">User_Name</label>
                    <input type="text" class="form-input rounded-md border-gray-300 w-full border h-[40px] p-2" name="User_Name" required />
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                    <input type="email" class="form-input rounded-md border-gray-300 w-full border h-[40px] p-2" name="Email" required/>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Phone</label>
                    <input type="text" class="form-input rounded-md border-gray-300 w-full border h-[40px] p-2" name="Phone" required/>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">City</label>
                    <input type="text" class="form-input rounded-md border-gray-300 w-full border h-[40px] p-2" name="City" required/>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Password</label>
                    <input type="text" class="form-input rounded-md border-gray-300 w-full border h-[40px] p-2" name="Password" required/>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Select Role</label>
                    <select class="form-select rounded-md border-gray-300 w-full border h-[40px] p-2" name="Role">
                        <option value="3" selected>User</option>
                    </select>
                </div>

                <div class="mb-4">
                    <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                        Save
                    </button>
                </div>
                <p>Already have an account? <a href="{{route('login')}} " class="text-blue-600">Login now</a></p>
            </form>
        </div>
    </div>
</div>

@endsection
