@extends('widget.sidebar')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Menu</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Mulish:ital,wght@1,600&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        * {
            margin: 0;
            padding: 0;
            outline: none;
            border: none;
            text-decoration: none;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            padding-top: 70px;
            height: 100%;
            background: #fff;
            padding-left: 100px;
            justify-items: center;
            align-content: center;
        }

        .form {
            flex-direction: column;
            display: flex;
            box-shadow: 3px 2px 10px grey;
            border-radius: 15px;
            width: 1000px;
        }

        .form-header {
            display: flex;
            justify-content: center;
            justify-items: center;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            padding: 20px 30px;
            background-color: pink;
            color: white;
        }

        .form-section {
            display: flex;
            align-items: center;
            padding: 20px 30px;
        }

        form {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        label {
            color: black;
            font-weight: 600;
            font-size: 18px;
        }

        input {
            margin-bottom: 30px;
            width: 500px;
            padding: 5px 10px;
            border: 2px solid pink;
            border-radius: 6px;
            color: black;
            /* box-shadow: 3px 3px 5px grey; */
        }

        select {
            margin-bottom: 30px;
            width: 500px;
            padding: 5px 10px;
            border: 2px solid pink;
            border-radius: 6px;
            color: black;
            /* box-shadow: 3px 3px 5px grey; */
            font-weight: 500;
        }
    </style>
</head>

<body>
    <div class="form">
        <div class="form-header">
            <h2>Create Your Menu</h2>
        </div>
        <div class="form-section">
            <form action="{{ route('menu.store')}}" method="POST" enctype="multipart/form-data">

                @csrf

                <label>Image</label>
                <input type="file" name="image" class="form-control" accept="image/*">
                @error('image')
                    <small style="color: red;">{{ $message }}</small>
                @enderror
                <label>Name</label>
                <input type="text" name="name" id="name" class="form-control">
                @error('name')
                    <small style="color: red;">{{ $message }}</small>
                @enderror
                <label>Price</label>
                <input type="number" name="price" id="price" class="form-control">
                @error('price')
                    <small style="color: red;">{{ $message }}</small>
                @enderror
                <label>Description</label>
                <input type="text" name="description" id="desc" class="form-control">
                @error('description')
                    <small style="color: red;">{{ $message }}</small>
                @enderror
                <label for="cat">Category</label>
                <select name="categoryID" id="cat" class="form-control">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name_category }}</option>
                    @endforeach
                </select>
                @error('categoryID')
                    <small style="color: red;">{{ $message }}</small>
                @enderror
                <input type="submit" value="Save">
            </form>
        </div>
    </div>
</body>

</html>