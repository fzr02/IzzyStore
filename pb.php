<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IzzyStore</title>
    <link rel="stylesheet" href="popup.css"/>
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
      <h2>Point Blank</h2>
      <img src="images/pb.jpg">
      <input type="hidden" name="game" value="pb">
      <div class="item-box">
        <div class="item" onclick="openPopup()">
          <input type="text" name="id" placeholder="Username" id="id"/>
          <input type="text" name="server" placeholder="server" id="server"/>        
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

      <h3> Voucher</h3>
      <div class="item-box">
        <div class="item" onclick="toggleSelection(this)">
          <h3>1200 cash</h3>
          <p>Rp 10.000</p>
          <input type="radio" name="pesanan[]" value="1200 cash">
        </div>

        <div class="item" onclick="toggleSelection(this)">
          <h3>2400 cash</h3>
          <p>Rp 22.000</p>
          <input type="radio" name="pesanan[]" value="2400 cash">
        </div>

        <div class="item" onclick="toggleSelection(this)">
          <h3>6000 cash</h3>
          <p>Rp 58.000</p>
          <input type="radio" name="pesanan[]" value="6000 cash">
        </div>

        <div class="item" onclick="toggleSelection(this)">
          <h3>12000 cash</h3>
          <p>Rp 100.000</p>
          <input type="radio" name="pesanan[]" value="12000 cash">
        </div>

        <div class="item" onclick="toggleSelection(this)">
          <h3>24000 cash</h3>
          <p>Rp 200.000</p>
          <input type="radio" name="pesanan[]" value="24000 cash">
        </div>

        <div class="item" onclick="toggleSelection(this)">
            <h3>60000 cash</h3>
            <p>Rp 500.000</p>
            <input type="radio" name="pesanan[]" value="6000 cash">
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
