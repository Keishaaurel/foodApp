<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <!-- <link rel="stylesheet" href="{{{ asset('css/sidebar.css')}}}"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
}

nav {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    height: 100%;
    background: #fff;
    width: 100px;
    overflow: hidden;
    transition: width 0.2s linear;
    box-shadow: 0 20px 35px rgba(0, 0, 0, 0.1);
}

.logo {
    text-align: center;
    display: flex;
    transition: all 0.5s ease;
    margin: 10px 0 0 10px;
    padding: 15px;
    width: 300px;
}

.logo img {
    width: 55px;
    height: 55px;
    border-radius: 50%;
}

.logo span {
    font-weight: bold;
    padding-left: 15px;
    font-size: 18px;
    text-transform: uppercase;
}

a {
    position: relative;
    color: rgb(85, 83, 83);
    font-size: 14px;
    display: table;
    width: 300px;
    padding: 10px;
}

.fas {
    position: relative;
    width: 90px;
    height: 50px;
    top: 14px;
    font-size: 20px;
    text-align: center;
    color: black;
}

.nav-item {
    font-weight: 400;
    position: relative;
    top: 12px;
    margin-left: 15px;
}

a:hover {
    border-radius: 50px; 
    background: #eee;
    transition: all 0.2 ease;
}

nav:hover {
    width: 300px;
    transition: all 0.5s ease;
}

.logout {
    position: absolute;
    bottom: 30px;
}
    </style>
</head>
<body>
    <nav>
        <ul>
            <li>
                <div class="logo">
                    <img src="image/logo.jpg" alt="">
                    <span class="nav-item">Restaurant</span>
                </div>
            </li>
            <li><a href="icon">
                <i class="fas fa-solid fa-user"></i>
                <span class="nav-item">Account</span>
            </a></li>
            <li><a href="icon">
                <i class="fas fa-solid fa-house"></i>
                <span class="nav-item">Home</span>
            </a></li>
            <li><a href="icon">
                <i class="fas fa-solid fa-bars"></i>
                <span class="nav-item">Menu</span>
            </a></li>
            <li><a href="" class="logout">
            <i class="fas fa-solid fa-right-from-bracket"></i>
                <span class="nav-item">Log Out</span>
            </a></li>
        </ul>
    </nav>
</body>
</html>