<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IzzyStore</title>
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
  <form action="topupController.php" method="post" id="topupForm">
    <div class="container">
      <h2>Top Up MLBB</h2>
      <input type="hidden" name="game" value="mlbb">
      <img src="images/mlbb.jpg">
      <h3>Masukkan ID</h3>
      <div class="item-box">
        <div class="item" onclick="openPopup()">
          <input type="text" name="id" placeholder="ID Pengguna" id="id"/>
          <input type="text" name="server" placeholder="Server" id="server"/>
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
        <div class="item" onclick="toggleSelection(this, '80 Diamonds + 8 Bonus')">
          <h3>80 Diamonds + 8 Bonus</h3>
          <p>Rp 23.000</p>
          <input type="radio" name="pesanan[]" value="80 Diamonds + 8 Bonus" id="pesanan_80">
        </div>

  <div class="item" onclick="toggleSelection(this, '160 Diamonds + 16 Bonus')">
    <h3>160 Diamonds + 16 Bonus</h3>
    <p>Rp 46.000</p>
    <input type="radio" name="pesanan[]" value="160 Diamonds + 16 Bonus" id="pesanan_160">
  </div>

  <div class="item" onclick="toggleSelection(this, '217 Diamonds + 23 Bonus')">
    <h3>217 Diamonds + 23 Bonus</h3>
    <p>Rp 62.000</p>
    <input type="radio" name="pesanan[]" value="217 Diamonds + 23 Bonus" id="pesanan_217">
  </div>

  <div class="item" onclick="toggleSelection(this, '333 Diamonds + 37 Bonus')">
    <h3>333 Diamonds + 37 Bonus</h3>
    <p>Rp 95.000</p>
    <input type="radio" name="pesanan[]" value="333 Diamonds + 37 Bonus" id="pesanan_333">
  </div>

  <div class="item" onclick="toggleSelection(this, '637 Diamonds + 79 Bonus')">
    <h3>637 Diamonds + 79 Bonus</h3>
    <p>Rp 180.000</p>
    <input type="radio" name="pesanan[]" value="637 Diamonds + 79 Bonus" id="pesanan_637">
  </div>

  <div class="item" onclick="toggleSelection(this, '936 Diamonds + 112 Bonus')">
    <h3>936 Diamonds + 112 Bonus</h3>
    <p>Rp 264.000</p>
    <input type="radio" name="pesanan[]" value="936 Diamonds + 112 Bonus" id="pesanan_936">
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

        <button type="submit" id="pesanSekarangButton">Pesan Sekarang</button>
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
