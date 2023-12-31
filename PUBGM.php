<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PUBG Mobile</title>
    <link rel="stylesheet" href="popup.css" />
    <script src="topup.js" defer></script>
  </head>
  <body>
    <div>
    <div>
    <header>
      <nav>
          <ul>
             <li class="logo">IzzyStore</li>
             <li class="btn"><span class="fas fa-bars"></span></li>
             <div class="items">
                <li><a href="Index.html">Home</a></li>
                <li><a href="Index.html">About</a></li>
                <li><a href="Index.html">Contact</a></li>
             </div>
          </ul>
       </nav>
       <div class="content">
          </div>
       </div>

  </header>
  <form action="topupController.php" method="post">
    <div class="container">
      <h2>Top Up PUBG Mobile</h2>
      <img src="images/pubgm.jpg">
      <input type="hidden" name="game" value="PUBGM">
      <h3>Masukkan ID</h3>
      <div class="item-box">
        <div class="item" onclick="openPopup()">
          <input type="text" name="id" placeholder="id" id="id"/>
          <input type="text" name="server" placeholder="server" id="username"/>        
        </div>
      </div>

      <h3>Masukkan Alamat Email</h3>
      <div class="item" onclick="openPopup()">
        <input type="text" name="email" placeholder="Email" id="email" />
      </div>
      <h3>Masukkan Nomer Whatsapp</h3>
      <div class="item" onclick="openPopup()">
        <input type="text" name="nomorwa" placeholder="No WA" id="nomorwa" />
      </div>
      <h3> List Harga UC</h3>
      <div class="item-box">
        <div class="item" onclick="toggleSelection(this)">
          <h3>60 UC</h3>
          <p>Rp 13.000</p>
          <input type="radio" name="pesanan[]" value="60 uc">
        </div>

        <div class="item" onclick="toggleSelection(this)">
          <h3>325 UC</h3>
          <p>Rp 64.000</p>
          <input type="radio" name="pesanan[]" value="325 uc">
        </div>

        <div class="item" onclick="toggleSelection(this)">
          <h3>660 UC</h3>
          <p>Rp 127.000</p>
          <input type="radio" name="pesanan[]" value="660 uc">
        </div>

        <div class="item" onclick="toggleSelection(this)">
          <h3>1800 uc</h3>
          <p>Rp 316.000</p>
          <input type="radio" name="pesanan[]" value="1800 uc">
        </div>

        <div class="item" onclick="toggleSelection(this)">
          <h3>3850 UC</h3>
          <p>Rp 632.000</p>
          <input type="radio" name="pesanan[]" value="3850 uc">
        </div>

        <div class="item" onclick="toggleSelection(this)">
            <h3>8100 UC</h3>
            <p>Rp 1.260.000</p>
            <input type="radio" name="pesanan[]" value="8100 uc">
          </div>
      </div>

      <h3>Pilihan Pembayaran</h3>
  <div>
    <div class="payment-option" id="e-wallet" onclick="toggleSelection(this, 'e-wallet')">
      <p>E-Wallet</p>
      <img src="images/shopeepay.jpg" alt="">
      <img src="images/danaa.jpg" alt="">
      <img src="images/gopay.jpg" alt="">
      <input type="radio" name="pembayaran" value="e-wallet" id="pembayaran">
    </div>
    <div class="payment-option" id="bank" onclick="toggleSelection(this,'bank')">
      <p>Bank Transfer</p>
      <img src="images/Bri.jpg" alt="">
      <img src="images/mandiri.jpg" alt="">
      <input type="radio" name="pembayaran" value="bank" id="pembayaran">
    </div>
    <div class="payment-option" id="market" onclick="toggleSelection(this, 'market')">
      <p>Convenience Store</p>
      <img src="images/alfamart.jpg" alt="">
      <img src="images/indomaret.jpg" alt="">
      <input type="radio" name="pembayaran" value="market" id="pembayaran">
    </div>
  </div>

        <button type="submit" >Pesan Sekarang</div>
      </div>      
    </form>
      <div>
        <div class="popup" id="successPopup">
          <div class="popup-content">
            <span class="close-popup" onclick="closePopup()">&times;</span>
            <p>Pesanan berhasil dibuat!</p>
            <div id="whatsappButton" class="whatsapp-button" onclick="redirectToWhatsApp()">Klik disini untuk melanjutkan Pembayaran</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
  </body>
</html>