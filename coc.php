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
  <form action="topupController.php" method="post">
    <div class="container">
      <h2>Clash Of Clans</h2>
      <img src="images/coc.jpg">
      <input type="hidden" name="game" value="clash of clans">
      <h2>Masukkan Tag</h2>
      <div class="item-box">
        <div class="item" onclick="openPopup()">
          <input type="text" name="id" placeholder="Masukkan Player Tag" id="id"/>
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

      <h3> Gems</h3>
      <div class="item-box">
        <div class="item" onclick="toggleSelection(this, '88 gems')">
          <h3>88 Gems</h3>
          <p>Rp 15.000</p>
          <input type="radio" name="pesanan[]" value="88 gems" id="pesanan_88">
        </div>

        <div class="item" onclick="toggleSelection(this, '550 gems')">
          <h3>550 Gems</h3>
          <p>Rp 72.000</p>
          <input type="radio" name="pesanan[]" value="550 gems" id="pesanan_550">
        </div>

        <div class="item" onclick="toggleSelection(this, '1320 gems')">
          <h3>1320 Gems</h3>
          <p>Rp 140.000</p>
          <input type="radio" name="pesanan[]" value="1320 gems" id="pesanan_1320">
        </div>

        <div class="item" onclick="toggleSelection(this, '2750 gems')">
          <h3>2750 Gems</h3>
          <p>Rp 282.000</p>
          <input type="radio" name="pesanan[]" value="2750 gems" id="pesanan_2750">
        </div>

        <div class="item" onclick="toggleSelection(this, '7150 gems')">
          <h3>7150 Gems</h3>
          <p>Rp 704.000</p>
          <input type="radio" name="pesanan[]" value="7150 gems" id="pesanan_7150">
        </div>

        <div class="item" onclick="toggleSelection(this, '16800 gems')">
            <h3>16800 Gems</h3>
            <p>Rp 1.410.000</p>
            <input type="radio" name="pesanan[]" value="16800 gems" id="pesanan_16800">
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
