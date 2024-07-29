<!-- component -->
{{-- <html> --}}
{{-- <head>
        <link rel="stylesheet" href="https://horizon-tailwind-react-git-tailwind-components-horizon-ui.vercel.app/static/css/main.ad49aa9b.css" />
    </head> --}}
{{-- <body > --}}

{{-- {{dd($user_data->toArray()->Name)}} --}}



@foreach ($user_data as $data)
    <div class="flex flex-col justify-center items-center lg:h-[100vh] h-auto lg:-mt-5 mt-5">
        <div
            class="relative flex flex-col items-center rounded-[20px] w-[80%] max-w-[95%] mx-auto bg-white bg-clip-border shadow-3xl shadow-shadow-500 dark:!bg-navy-800 dark:text-white dark:!shadow-none p-3">
            <div class="mt-2 mb-8 w-full">
                <h4 class="px-2 text-xl font-bold text-navy-700 dark:text-white">
                    {{ request()->session()->get('Role') }} Dashboard
                </h4>
                <p class="mt-2 px-2 text-base text-gray-600">
                    As we live, our hearts turn colder. Cause pain is what we go through
                    as we become older. We get insulted by others, lose trust for those
                    others. We get back stabbed by friends. It becomes harder for us to
                    give others a hand. We get our heart broken by people we love, even
                    that we give them all...
                </p>
            </div>
            <div class="grid grid-cols-2 gap-4 px-2 w-full">
                <div
                    class="flex flex-col items-start justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                    <p class="text-sm text-gray-600">FullName</p>
                    <p class="text-base font-medium text-navy-700 dark:text-white">
                        {{ $data->Name }}
                    </p>
                </div>

                <div
                    class="flex flex-col justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                    <p class="text-sm text-gray-600">UserName</p>
                    <p class="text-base font-medium text-navy-700 dark:text-white">
                        {{ $data->User_Name }}
                    </p>
                </div>

                <div
                    class="flex flex-col items-start justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                    <p class="text-sm text-gray-600">Email</p>
                    <p class="text-base font-medium text-navy-700 dark:text-white">
                        {{ $data->email }}
                    </p>
                </div>

                <div
                    class="flex flex-col justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                    <p class="text-sm text-gray-600">Phone</p>
                    <p class="text-base font-medium text-navy-700 dark:text-white">
                        {{ $data->Phone }}
                    </p>
                </div>

                <div
                    class="flex flex-col items-start justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                    <p class="text-sm text-gray-600">City</p>
                    <p class="text-base font-medium text-navy-700 dark:text-white">
                        {{ $data->City }}
                    </p>
                </div>

                <div
                    class="flex flex-col justify-center rounded-2xl bg-white bg-clip-border px-3 py-4 shadow-3xl shadow-shadow-500 dark:!bg-navy-700 dark:shadow-none">
                    <p class="text-sm text-gray-600">ChangePassword & Update Profile</p>
                    <p class="text-sm text-gray-600"></p>
                    <p class="text-base font-medium text-navy-700 dark:text-white mt-2">
                        <button
                            class="middle none center mr-4 rounded-lg bg-red-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-red-500/20 transition-all hover:shadow-lg hover:shadow-red-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                            data-ripple-light="true">
                            <a href="{{ route('ChangePassword') }}" target="_blank"
                                class="text-brand-500 font-bold">Change Password</a>
                        </button>
                    
                        <button
                            class="middle none center mr-4 rounded-lg bg-green-500 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-red-500/20 transition-all hover:shadow-lg hover:shadow-red-500/40 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                            data-ripple-light="true">
                            <a href="{{ route('updateProfile')}}" target="_blank"
                                class="text-brand-500 font-bold">Update Profile</a>
                        </button>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endforeach


{{-- </body> --}}
{{-- </html> --}}
