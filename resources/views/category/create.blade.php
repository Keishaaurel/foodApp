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
    <form action="{{ route('category.store')}}" method="POST">
        @csrf
        <label>Name</label>
        <input type="text" name="name_category" id="name" class="form-control">
        <input type="submit" value="Submit">
    </form>
</body>
</html>