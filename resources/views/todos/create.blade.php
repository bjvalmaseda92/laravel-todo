<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todos</title>
    <link rel="stylesheet" href="{{ asset('css/tailwind.min.css') }}">
</head>
<body>
    <div class="text-center pt-10">
        <h1 class="text-2xl">What next to you need To-DO</h1>
        <x-alert/>
        <form method="post" action="/todos/create" class="py-5">
            @csrf
            <input type="text" name="title" id="title" class="py-2 px-2 border">
            <input type="submit" value="Create" class="p-2 border rounded">
        </form>
    </div>
</body>
</html>