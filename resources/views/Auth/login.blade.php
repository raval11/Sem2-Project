@extends('layout.main')

@section('main')
    <h1 class="text-center text-3xl mt-8">Login</h1>


    <div class="w-[70%] mx-auto mt-10">
        <form class="p-10 border-2 rounded-md shadow-lg" method="POST" action="login">
            @csrf

            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email
                    address</label>
                <input type="email" name="Email" id="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="john.doe@company.com" />
            </div>
            <div class="mb-6">
                <label for="Password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                <input type="password" name="Password" id="Password"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="•••••••••" />
            </div>

            <div class="mb-4">
                <button type="submit"
                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    id='submit'>Submit</button>
            </div>
            <p>Dont't have an account? <a href="{{ route('register') }}" class="text-blue-600">Sing Up</a></p>
            <a href="{{ route('forgotPassword') }}" class="text-blue-600">Forgot Password?</a>
        </form>
    </div>






    @if ($errors->any())
    <script>
        document.addEventListener('DOMContentLoaded', (event) => {
            @foreach ($errors->all() as $error)
                Toastify({
                    text: "{{ $error }}",
                    duration: 3000,
                    close: true,
                    gravity: "top", // `top` or `bottom`
                    position: "right", // `left`, `center` or `right`
                    backgroundColor: "#f44336",
                }).showToast();
            @endforeach
        });
    </script>
@endif




@endsection
