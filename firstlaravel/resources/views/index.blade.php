<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Group 1 </h1>
<ul>
    @foreach ($users as $user)
        <li>{{ $user->name }} (email: {{ $user->email }})</li>
    @endforeach
</ul>
</body>
</html>