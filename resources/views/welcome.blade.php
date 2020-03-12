<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
  <title>Shoes Store</title>
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
            <a href="./userLogin" id="login" style="display: none">Login</a>
            <a href="./user" id="register" style="display: none">Register</a>
          </div>
        </div>
      </div>
    </div> 
  
    <div id="content">
      <!-- Cac mau giay moi nhap ve -->
      <div id="newShoes">
        <div class="title">
          <h2>Giay moi ve</h2>
        </div>
        <div id="mauGiay">
          <!-- Them js @click => chi tiet ve giay -->
          <div class="giay">
            <a href="#"><img src="./images/ctLogoPlay.png" /></a>
            <h3><a href="#">Converse Chuck Taylor Logo Play</a></h3>
            <p>Gia: 1.000.000</p>
          </div>
          <div class="giay">
            <a href="#"><img src="./images/XLayZhang.png" /></a>
            <h3><a href="#">Converse XLayZhang (Black Color)</a></h3>
            <p>Gia: 1.000.000</p>
          </div>
          <div class="giay">
            <a href="#"><img src="./images/XLayZhangWhite.png" /></a>
            <h3><a href="#">Converse XLayZhang (White Color)</a></h3>
            <p>Gia: 1.000.000</p>
          </div>
          <div class="giay">
            <a href="#"><img src="./images/BoldNI.png" /></a>
            <h3><a href="#">Vans Block Bold NI</a></h3>
            <p>Gia: 1.000.000</p>
          </div>
          <div class="giay">
            <a href="#"><img src="./images/Mismatch.png" /></a>
            <h3><a href="#">Mitchmatch Style 36</a></h3>
            <p>Gia: 1.000.000</p>
          </div>
          <div class="giay">
            <a href="#"><img src="./images/WarpedFloral.png" /></a>
            <h3><a href="#">Warped Floral Ski-8</a></h3>
            <p>Gia: 1.000.000</p>
          </div>
        </div>
      </div>
      <!-- Tin tuc -->
      <!-- Need check -->
      <div id="news">
        <div class="title">
          <h2>Tin tuc moi</h2>
        </div>
        <div id="thongTin">
          <div>
            <!-- <img src="" /> -->
            <p>Thong tin SALE.</p>
            <a href="#" class="seeMore">Xem Them</a>
          </div>
          <div>
            <!-- <img src="" /> -->
            <p>Co so moi.</p>
            <a href="#" class="seeMore">Xem them</a>
          </div>
          <div>
            <!-- <img src="" /> -->
            <p>Tuyen nhan vien ban hang.</p>
            <a href="#" class="seeMore">Xem them</a>
          </div>
        </div>
      </div>
    </div>
    
    <div id="contact">
      <div class="title">
        <h2>Lien he</h2>
      </div>
      <div id="info">
        <div>
          <p>Dia chi: 151 Nguyen Duc Canh</p>
          <p>Facebook: <a href="http://facebook.com/loi.le.589" target="_blank">Le Loi</a></p>
          <p>Instagram: <a href="http://instagram.com/sr_itsmyfault/?hl=vi" target="_blank">sr_itsmyfault</a></p>
          <p>Dien thoai: 0986093341 hoac 0979854112</p>
        </div>
        <div id="map">
          <!-- Ban do vi tri cua shop -->
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.146049638375!2d105.8505416154074!3d20.986781886021213!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac6b20f0acef%3A0xd3f46c3ad4ff3fdf!2zMTUxIE5ndXnhu4VuIMSQ4bupYyBD4bqjbmgsIFTGsMahbmcgTWFpLCBIb8OgbmcgTWFpLCBIw6AgTuG7mWksIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1579617020708!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
        </div>
      </div>
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
<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
</html>