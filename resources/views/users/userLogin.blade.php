<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/user.css') }}">
    <title>User</title>
</head>
<body>
<div id="container">
    <div id="header">
      <img src="./images/logo.png" />
      <div id="menu">
        <h1>Make you feel better with Shoes</h1>
        <a href="#"><i class="fas fa-bars fa-2x"></i></a>
        <div id="navbar">
          <ul>
            <li><a href="./">Trang Chu</a></li>
            <li id="loaiGiay" class="theLoai">
              <a href="#" class="theLoai">The Loai</a>
              <ul style="display: none;">
                <li><a href="#"><i class="fas fa-hand-point-right" style="margin-right: 5px"></i>Converse</a></li>
                <li><a href="#"><i class="fas fa-hand-point-right" style="margin-right: 5px;"></i>Vans</a></li>
              </ul>
            </li>
            <li><a href="#">Chinh sach bao hanh</a></li>
            <li><a href="#">Lien He</a></li>
          </ul>
          <!-- insert search icon -->
          <div id="search">
            <input type="text" placeholder="Search" >
            <a href="#"><i class="fas fa-search"></i></a>
          </div>
          <a href="#" class="icon"><i class="fas fa-shopping-cart fa-2x" style="margin-left: 15px;"></i></a>
          <div href="#" class="icon-user">
            <i class="fas fa-user fa-2x" style="margin-left: 15px;"></i>
            <a href="#" id="login" style="display: none">Login</a>
            <a href="./user" id="register" style="display: none">Register</a>
          </div>
        </div>
      </div>
    </div> 
  
    <div id="form">
        <form action="{{ route('check') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <h2>Login</h2> 
            <label>Email</label>
            <input type="text" name="email" placeholder="Email..."/></br>
            <label>Password</label>
            <input type="password" name="password" placeholder="Password..."/></br>
            <h3 style="color: red">{{ $emailWrong ?? '' }}</h3>
            <h3 style="color: red">{{ $passwordWrong ?? '' }}</h3>
            <button type="submit">Sign In</button>           
        </form>
    </div> 

    <div id="footer">
      <div>
        <!-- <img src="./images/logo1.png" /> -->
        <a href="http://facebook.com/loi.le.589" target="_blank"><i class="fab fa-facebook fa-2x"></i></a>
        <a href="http://instagram.com/sr_itsmyfault/?hl=vi" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
        <a href="#"><i class="fas fa-envelope fa-2x"></i></a>
        <p>KL_Shoes - Cua hang phan phoi giay chinh hang</p>
      </div>
    </div>

    <div id="messenger">
      <div style="display: none;">
        <a href="#" class="exit">x</a>
        <p>Xin chao, hay nhan tin cho chung toi!</p>
        <a href="#" class="link">Continue as xxx</a>
      </div>
      <a href="#"><i class="fab fa-facebook-messenger fa-4x"></i></a>
    </div>
  </div>
</body>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="{{ asset('js/user.js') }}"></script>
</html>