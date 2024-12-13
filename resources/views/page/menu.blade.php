@extends('widget.sidebar')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="{{{ asset('css/menu.css')}}}">
    <link rel="stylesheet"
        href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer"')}}">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Mulish:ital,wght@1,600&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            overflow: hidden;
            padding-left: 100px;
        }

        .table {
            width: 100%;
        }

        .table_header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            padding: 20px;
            background-color: rgb(240, 240, 240);
        }

        .table_header p {
            color: #000;
        }

        .icon {
            outline: none;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            color: #fff;
        }

        td button:nth-child(1) {
            border-radius: 5px;
            width: 30px;
            height: 30px;
            background-color: #0298cf;

        }

        td button:nth-child(2) {
            border-radius: 5px;
            width: 30px;
            height: 30px;
            background-color: #f80000;
        }

        .add_new {
            border-radius: 6px;
            padding: 10px 20px;
            color: #fff;
            background-color: #0298cf;
            cursor: pointer;
            /* box-shadow: 3px 2px 10px rgb(240, 240, 240); */
        }

        input {
            padding: 10px 20px;
            margin: 0 10px;
            outline: none;
            border: 1px solid #0298cf;
            border-radius: 6px;
            color: #0298cf;
        }

        .table_section {
            height: 500px;
            overflow: auto;
        }

        table {
            width: 100%;
            table-layout: fixed;
            min-width: 900px;
            border-collapse: collapse;
        }

        thead th {
            position: sticky;
            top: 0;
            background-color: #f6f9fc;
            color: #8493a5;
            font-size: 15px;
        }

        th,
        td {
            border-bottom: 1px solid #ddd;
            padding: 10px 20px;
            word-break: keep-all;
            text-align: center;
        }

        td img {
            height: 60px;
            width: 60px;
            object-fit: cover;
            border-radius: 15px;
            border: 5px solid #ced0d2;
        }

        tr:hover td {
            color: #0298cf;
            /* cursor: pointer; */
            background-color: #f6f9fc;

        }

        ::placeholder {
            color: #0298cf;
        }

        ::-webkit-scrollbar {
            height: 5px;
            width: 5px;
        }

        ::-webkit-scrollbar-track {
            box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        }

        ::-webkit-scrollbar-thumb {
            box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        }

        .pagination {
            display: flex;
            justify-content: flex-end;
            width: 100%;
            padding: 10px 20px;
            background: #fff;
        }

        .pagination div {
            padding: 10px;
            border: 2px solid #d5d0d0;
            height: 40px;
            width: 40px;
            border-radius: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #0298cf;
            color: #fff;
            box-shadow: 0px 0px 4px 0px rgba(0, 0, 0, 0.75);
            margin: 0 5px;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="table">
        <div class="table_header">
            <p>Product Details</p>
            <div class="">
                <input placeholder="Product">
                <a href="{{ url('/menu/create')}}" class="add_new">+ Add New</a>
                <a href="{{ url('/category/create')}}" class="add_new">+ Add cat</a>
            </div>
        </div>
        <div class="table_section">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Product</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Desc</th>
                        <th>Category</th>
                        <th>Action</th>
                    </tr>
                </thead>
                @foreach ($menus as $item)
                <tbody>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        <img src="{{ asset('/storage/images/'. $item->image) }}" alt="" srcset="">
                    </td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->description }}</td>   
                    <td>{{ $item->category }}</td>
                    <td>
                        <button><i class="icon fa-solid fa-pen-to-square"></i></button>
                        <button><i class="icon fa-solid fa-trash"></i></button>
                    </td>

                </tbody>
                @endforeach
            </table>
        </div>
        <!-- <div class="pagination">
            <div><i class="fa-solid fa-angles-left"></i></div>
            <div><i class="fa-solid fa-angle-left"></i></div>
            <div>1</div>
            <div>2</div>
            <div><i class="fa-solid fa-angle-right"></i></div>
            <div><i class="fa-solid fa-angles-right"></i></i></div>
        </div> -->
    </div>
</body>

</html>