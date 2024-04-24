<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <header class="h-[70px] bg-blue-600 text-white ">
            <nav class="w-[90%] mx-auto h-[70px] flex justify-between items-center">
                <div class="logo">Events</div>
                <ul class="flex gap-3">
                    <li> <a href="{{route('home')}}">Home</></li>
                    <li> <a href="">Services</a></li>
                    <li> <a href="">About</a></li>
                    <li> <a href="">Gallery</a></li>
                    <li> <a href="">Price</a></li>
                     <li> <a href="{{route('register')}}">Registration</a></li>
                    <li> <a href="{{ route('login')}}">Login</a></li>
                </ul>
            </nav>
        </header>
</body>
</html>
