<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @extends('layout')
</head>
<body>
    <nav class="m-2 flex flex-col mx-14">
        <div>
            <h1 class="text-2xl text-center">Homepage</h1>
        </div>
        <div class="text-end flex flex-col justify-end items-end gap-4">
            <a href="/login" class="w-fit relative inline-block text-lg transition-all duration-100 hover:text-xl hover:font-bold  hover:scale-[1.1]">Log in</a>
            <a href="/register" class="w-fit relative inline-block text-lg transition-all duration-100 hover:text-xl hover:font-bold hover:scale-[1.1]">Register</a>
            <a href="{{ route('userlist') }}" class="w-fit relative inline-block text-lg transition-all duration-100 hover:text-xl hover:font-bold hover:scale-[1.1]">Userlist</a>
        </div>
    </nav>
    
    
</body>
</html>