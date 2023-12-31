<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Izzy Store</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="topup.js" defer></script>
</head>
<body>
    <header>
        <nav>
            <ul>
               <li class="logo">IzzyStore</li>
               <li class="btn"><span class="fas fa-bars"></span></li>
               <div class="items">
                  <li><a href="#body">Home</a></li>
                  <li><a href="#footer">About</a></li>
                  <li><a href="#footer">Contact</a></li>
                  <li><a href="history.php">History</a></li>                  
               </div>
            </ul>
         </nav>
    </header>
    <form action="topupController.php" method="post">
    <div class="main">
        <h1 class="title-p">Game</h1>
        <section id="populer" class="populer">
            <div class="ff">
                <div class="link">
                    <a href="ff.php">
                            <img src="./images/ff.png" alt="">
                            <div class="judul-produk">Free Fire</div>
                    </a>
                </div>
            </div>

            <div class="mlbb" >
                <div class="link">
                    <a href="mlbb.php" name="game" id="game" value="mlbb">
                    <img src="./images/mlbb.jpg" alt="">
                    <div class="judul-produk">MLBB</div>
                    </a>

                </div>
            </div>
            
            <div class="Valorant">
                <div class="link">
                    <a href="valorant.php">
                            <img src="./images/valorant.jpg" alt="">
                            <div class="judul-produk">Valorant</div>
                    </a>
                </div>
            </div>

            <div class="PUBGM">
                <div class="link">
                    <a href="PUBGM.php">
                            <img src="./images/pubgm.jpg" alt="">
                            <div class="judul-produk">PUBG Mobile</div>
                    </a>
                </div>
            </div>

            <div class="genshin">
                <div class="link">
                    <a href="genshin.php">
                            <img src="./images/GenshinImpact.jpg" alt="">
                            <div class="judul-produk">Genshin Impact</div>
                    </a>
                </div>
            </div>
            <div class="hg">
                <div class="link">
                    <a href="higgsdomino.php">
                            <img src="images/higgs_domino.jpg" alt="">
                            <div class="judul-produk">Higgs Domino</div>
                    </a>
                </div>
            </div>
            <div class="mlbb">
                <div class="link">
                    <a href="pb.php">
                            <img src="images/pb.jpg" alt="">
                            <div class="judul-produk">Point Blank</div>
                    </a>
                </div>
            </div>
            <div class="genshin">
                <div class="link">
                    <a href="coc.php">
                            <img src="./images/coc.jpg" alt="">
                            <div class="judul-produk">Clash Of Clans</div>
                    </a>
                </div>
            </div>
        </section>
    </div>
</form>
   
        <footer class="footer-distributed" id="footer">

			<div class="footer-left">

				<h3>About<span>Selamat datang di Izzystore, rumah bagi para pemain game yang mencari pengalaman top up yang tanpa kesulitan dan terpercaya. Di Reystore, kami memahami betapa pentingnya kenyamanan dan kecepatan dalam mendapatkan mata uang dalam game atau item khusus.</span></h3>


			</div>

			<div class="footer-center">


			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<h3>Contacts</h3>
				</p>

				<div class="footer-icons">

					<a href="https://www.instagram.com/?hl=id"><i class='bx bxl-instagram bx-md'></i></a>
					<a href="https://wa.me/6289519086370"><i class='bx bxl-whatsapp bx-md'></i></a>
					<a href="https://github.com/fzr02"><i class='bx bxl-github bx-md' ></i></a>

				</div>

			</div>

		</footer>
</body>
</html>