<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Valorant </title>
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
      <h2>Valorant</h2>
      <input type="hidden" name="game" value="valorant">
      <img src="images/valorant.jpg">
      <h3>Masukkan Riot ID</h3>
      <div class="item-box">
        <div class="item" onclick="openPopup()">
          <input type="text" name="id" placeholder="ID Pengguna" id="id" />
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

      <h3> List Harga VP</h3>
      <h4>Region ID</h4>
      <div class="item-box">
        <div class="item" onclick="toggleSelection(this, '375 vp')">
          <h3>375 Points</h3>
          <p>Rp 44.000</p>
          <input type="radio" name="pesanan[]" value="375 vp" id="pesanan_375vp">

        </div>

        <div class="item" onclick="toggleSelection(this, '795 vp')">
          <h3>795 Points</h3>
          <p>Rp 92.000</p>
          <input type="radio" name="pesanan[]" value="795 vp" id="pesanan_795vp">
        </div>

        <div class="item" onclick="toggleSelection(this, '1375 vp')">
          <h3>1375 Points</h3>
          <p>Rp 145.000</p>
          <input type="radio" name="pesanan[]" value="1375 vp" id="pesanan_1375vp">
        </div>

        <div class="item" onclick="toggleSelection(this, '2820 vp')">
          <h3>2820 Points</h3>
          <p>Rp 290.000</p>
          <input type="radio" name="pesanan[]" value="2820 vp" id="pesanan_2820vp">
        </div>

        <div class="item" onclick="toggleSelection(this, '4000 vp')">
          <h3>4000 Points</h3>
          <p>Rp 385.000</p>
          <input type="radio" name="pesanan[]" value="4000 vp" id="pesanan_4000vp">
        </div> 

        <div class="item" onclick="toggleSelection(this)">
          <h3>8150 Points</h3>
          <p>Rp 770.000</p>
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
