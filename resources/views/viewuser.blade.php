<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('layout')
</head>
<body>
    <div class="m-4">
        <h1 class="text-center font-bold text-3xl">User List</h1>
        <table class="drop-shadow-xl my-4">
            <thead class="bg-blue-100">
                <tr>
                    <th class="p-3">S.No</th>
                    <th class="p-3">Name</th>
                    <th class="p-3">ID</th>
                    <th class="p-3">Email</th>
                    <th class="p-3">Operations</th>
                </tr>
            </thead>

            <tbody class="bg-neutral-50">
                @foreach ($users as $users)
                @php
                    $index = 1;
                @endphp
                <tr>
                    <td class="p-3">{{$index}}</td>
                    <td class="p-3">{{$users->name}}</td>
                    <td class="p-3">{{$users->id}}</td>
                    <td class="p-3">{{$users->email}}</td>
                    <td class="p-3">
                        <a class="px-2 border bg-neutral-200 hover:bg-neutral-100 transition-all cursor-pointer rounded-sm">Edit</a>
                        <a href="{{route('userdel',[$users->id])}}" class="px-2 border bg-neutral-200 hover:bg-neutral-100 transition-all cursor-pointer rounded-sm">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{route('user.index')}}" class="py-1 px-3 border border-black/30 hover:bg-neutral-200 transition-all cursor-pointer rounded-md">Go Back</a>
    </div>
</body>
</html>