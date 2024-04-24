@extends("layout.main")

@section('main')
<h1 class="text-center text-3xl mt-8">Change Password</h1>
<div class="container mx-auto mt-8">
    <div class="">
        <div class="mx-auto w-[90%]">
            <form method="POST" action="ChangePassword" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Old Password</label>
                    <input type="text" class="form-input rounded-md border-gray-300 w-full border h-[40px] p-2" name="oldPassword" required/>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">New Password</label>
                    <input type="text" class="form-input rounded-md border-gray-300 w-full border h-[40px]  p-2" name="newPassword" required/>
                </div>

                <div class="mb-4">
                    <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                        Save
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
