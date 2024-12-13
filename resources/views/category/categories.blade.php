<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            padding-left: 200px;
        }
    </style>
</head>

<body>
    @foreach ($categories as $category)
        <h1>{{ $category->name_category }}</h1>
    @endforeach
</body>

</html>