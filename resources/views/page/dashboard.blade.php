@extends('widget.sidebar')
@extends('widget.navbar')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- <link rel="stylesheet" href="{{{ asset('css/dashboard.css')}}}"> -->
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer"')}}">
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
    background: #fff;
    padding-left: 100px;
}

.category {
    margin-left: 50px;
    margin-top: 60px;  
    padding-top: 50px;
    display: flex;
    flex-direction: row;
    gap: 25px;
}

.cat {
    cursor: pointer;
    display: flex;
    padding: 10px;
    width: 150px;
    height: 80px;
    text-align: center;
    background-color: bisque;
    justify-content: center;
    align-items: center;
    border-radius: 10px;
    box-shadow: 5px 5px 3px rgb(240, 240, 240);
    word-break: keep-all;
}

.cat:hover {
    border: 4px outset pink;
    background-color: #fff;
    transition: all 0.5s ease-out;
}

.menus {
    margin-left: 50px;
    gap: 5%;
    margin-top: 50px;
    display: flex;
    flex-wrap:wrap;
    background-color: #fff;
}

.menu {
    margin-bottom: 50px;
    border-radius: 10px;
    box-shadow: 5px 5px 3px rgb(240, 240, 240);
    border: 1px solid rgb(240, 240, 240);
}

.menu img {
    width: 200px;
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
}

.desc {
    margin: 10px;
    margin-top: 0;
}

    </style>
</head>
<body>
    <div class="category">
        <div class="cat">
            <p>Pembuka</p>
        </div>
        <div class="cat">
            <p>Makanan Berat</p>
        </div>
        <div class="cat">
            <p>Makanan ringan</p>
        </div>
        <div class="cat">
            <p>Penutup</p>
        </div>
    </div>
    <div class="menus">
        <div class="menu">
            <img src="image/logo.jpg" alt="">
            <div class="desc">
                <h1>mie ayam</h1>
                <p>price</p>
            </div>
        </div>
        <div class="menu">
            <img src="image/logo.jpg" alt="">
            <div class="desc">
                <h1>mie ayam</h1>
                <p>price</p>
            </div>
        </div>
        <div class="menu">
            <img src="image/logo.jpg" alt="">
            <div class="desc">
                <h1>mie ayam</h1>
                <p>price</p>
            </div>
        </div>
        <div class="menu">
            <img src="image/logo.jpg" alt="">
            <div class="desc">
                <h1>mie ayam</h1>
                <p>price</p>
            </div>
        </div>
        <div class="menu">
            <img src="image/logo.jpg" alt="">
            <div class="desc">
                <h1>mie ayam</h1>
                <p>price</p>
            </div>
        </div>
        <div class="menu">
            <img src="image/logo.jpg" alt="">
            <div class="desc">
                <h1>mie ayam</h1>
                <p>price</p>
            </div>
        </div>
        <div class="menu">
            <img src="image/logo.jpg" alt="">
            <div class="desc">
                <h1>mie ayam</h1>
                <p>price</p>
            </div>
        </div>
    </div>
</body>
</html>