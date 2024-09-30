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
        <div class="border border-black py-8 px-4 rounded-md">
            <h1 class="text-2xl text-center">Login Page</h1>
            <form action="" class="flex flex-col my-4 gap-8 ">
                <div class="flex justify-between">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email">
                </div>
                <div class="flex justify-between">
                    <label for="password">Password:</label>
                    <input type="password" name="password" id="password">
                </div>
                <div class="flex flex-col-reverse items-center gap-4">
                    <h5>No Account? <a class="text-red-500 font-bold" href="{{route('user.register')}}">Register</a></h5>
                    <button class="bg-purple-300 py-2 px-4 rounded font-bold" value="submit" name="submit">Submit</button>
                </div>            
            </form>
        </div>
        <a href="{{route('user.index')}}" class="my-3 py-1 px-3 border border-black/30 hover:bg-neutral-200 transition-all cursor-pointer rounded-md">Go Back</a>
    </div>
</body>
</html>