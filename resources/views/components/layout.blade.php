<!DOCTYPE html>
<html lang="en" class="h-full bg-white">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SYS </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>

<body class="h-full">
    <div class="block black center_justify">
        <a href="/users">users</a>
        <br>
        <a href="/">Log out</a>
        {{ $slot }}

    </div>
</body>

</html>
