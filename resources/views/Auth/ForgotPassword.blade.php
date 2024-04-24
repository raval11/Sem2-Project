@extends("layout.main")

@section('main')
<h1 class="text-center text-3xl mt-8">Forgot Password</h1>
<div class="container mx-auto mt-8">
    <div class="">
        <div class="mx-auto w-[90%]">
            <form method="POST" action="forgotPassword" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">Email</label>
                    <input type="email" class="form-input rounded-md border-gray-300 w-full border h-[40px] p-2" name="Email" required/>
                </div>
                <div class="mb-4">
                    <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                        EMAIL PASSWORD RESET LINK
                    </button>
                </div>
                <p>Dont't have account? <a href="{{ route('register')}}" class="text-blue-600">Create an account</a></p>
            </form>
        </div>
    </div>
</div>
@endsection
