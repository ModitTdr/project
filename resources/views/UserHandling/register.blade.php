<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @extends('layout')
    <style>
        input{
            border:1px solid black;
            border-radius: 4px;
            padding: 2em;
        }
    </style>
    
</head>
<body>
    
    <div class="flex flex-col justify-center items-center w-screen h-screen">
        @if($message = Session::get('success'))
            <div class="absolute top-0 bg-green-300 font-bold py-2 px-4 my-2 w-fit rounded">
                 {{$message}}
             </div>
        @endif
        @if($errors->any())
            <div class="absolute top-0 bg-red-400 font-bold py-2 px-4 my-2 w-fit rounded">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
       
        <div class="border border-black py-8 px-4 rounded-md">
            <h1 class="text-2xl text-center">Register Page</h1>
            <form action="{{route('user.store')}}" method="POST" class="flex flex-col my-4 gap-8 ">
                @csrf
                <div class="flex justify-between gap-8">
                    <label for="name">Username:</label>
                    <input type="text" name="name" id="name">
                </div>
                <div class="flex justify-between">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email">
                </div>
                <div class="flex justify-between">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password">
                </div>
                <div class="flex justify-between">
                    <label for="re_password">Confirm Password:</label>
                    <input type="password" name="password_confirmation" id="re_password">
                </div>
                <div class="flex flex-col-reverse items-center gap-4">
                    <h5>Account have an account? <a class="text-red-500 font-bold" href="{{route('login')}}">Log in</a></h5>
                    <button class="bg-purple-300 py-2 px-4 rounded font-bold" value="submit" name="submit">Submit</button>
                </div>            
            </form>
            
        </div>
        <a href="{{route('user.index')}}" class="my-3 py-1 px-3 border border-black/30 hover:bg-neutral-200 transition-all cursor-pointer rounded-md">Go Back</a>
    </div>
</body>
</html>