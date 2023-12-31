<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Fire</title>
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
                <li><a href="#footer">About</a></li>
                <li><a href="#footer">Contact</a></li>
             </div>
          </ul>
       </nav>
       <div class="content">
          </div>
       </div>

  </header>
  <form action="topupController.php" method="post">
    <div class="container">
      <h2>Top Up Free Fire</h2>
      <img src="images/ff.png">
      <input type="hidden" name="game" value="free fire">

      <h3>Masukkan ID</h3>
      <div class="item-box">
        <div class="item" onclick="openPopup()">
        <input type="text" name="id" placeholder="ID Pengguna" id="id"/>
        <input type="text" name="server" placeholder="tagline" id="server"/>  
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

      <h3> List Harga Diamonds</h3>
      <div class="item-box">
        <div class="item" onclick="toggleSelection(this, '100 diamonds')">
          <h3>100 Diamonds </h3>
          <p>Rp 14.000</p>
          <input type="radio" name="pesanan[]" value="100 diamonds" id="pesanan_100">
        </div>

        <div class="item" onclick="toggleSelection(this, '280 diamonds')">
          <h3>280 Diamonds</h3>
          <p>Rp 36.000</p>
          <input type="radio" name="pesanan[]" value="280 diamonds" id="pesanan_280">
        </div>

        <div class="item" onclick="toggleSelection(this, '425 diamonds')">
          <h3>425 Diamonds</h3>
          <p>Rp 55.000</p>
          <input type="radio" name="pesanan[]" value="425 diamonds" id="pesanan_425">
        </div>

        <div class="item" onclick="toggleSelection(this, '720 diamonds')">
          <h3>720 Diamonds</h3>
          <p>Rp 88.000</p>
          <input type="radio" name="pesanan[]" value="720 diamonds" id="pesanan_720">
        </div>

        <div class="item" onclick="toggleSelection(this, '860 diamonds')">
          <h3>860 Diamonds </h3>
          <p>Rp 107.000</p>
          <input type="radio" name="pesanan[]" value="860 diamonds" id="pesanan_860">
        </div>

        <div class="item" onclick="toggleSelection(this, '1075 diamonds')">
          <h3>1075 Diamonds</h3>
          <p>Rp 135.000</p>
          <input type="radio" name="pesanan[]" value="1075 diamonds" id="pesanan_1075">
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