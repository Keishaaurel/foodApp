<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Mulish:ital,wght@1,600&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        .navbar {
            background-color: #fff;
            width: 100%;
            padding: 15px;
            display: flex;
            /* align-items: center; */
            box-shadow: 3px 2px 10px rgb(240, 240, 240);
            position: fixed;
            top: 0;
        }

        input {
            margin-left: 50px;
            width: 300px;
            padding: 10px 20px;
            border: 2px solid pink;
            border-radius: 6px;
            color: black;
            z-index: 1000;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <input type="text" placeholder="search">
    </div>
</body>

</html>