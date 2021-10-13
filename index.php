<html>
	<head>
		<style>

			html{
				scroll-behavior: smooth;
			}
			
			#goToTopButton{
				display: none;
				position: fixed;
				bottom: 20px;
				right: 30px;
				z-index: 99;
				font-size: 18px;
				border: none;
				outline: none;
				background-color: red;
				color: white;
				cursor: pointer;
				padding: 15px;
				border-radius: 30px;
				height: 45px;
				
			}

			#goToTopButton:hover {
				background-color: #555;
			}
		</style>


		<!-- bootstrap@4.6.0 -->
		<link rel='stylesheet' href='./src/bootstrap@4.6.0/bootstrap.min.css'>
		<script src='./src/bootstrap@4.6.0/jquery.slim.min.js'></script>
		<script src='./src/bootstrap@4.6.0/bootstrap.min.js'></script>
		<script src='./src/bootstrap@4.6.0/popper.min.js'></script>

		<title>Index</title>
	</head>
	<body>
		<!-- deprecated
		<p style="background-color:darkblue; color:white;">Tarikh & Masa: <?php echo(strftime("%m/%d/%Y %H%M"));?></p>
	-->
		<ul class="nav bg-dark nav-pills nav-fill nav-tabs border-0">
			<li class="nav-item">
				<a class="nav-link active border-0">Main Page</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-white border-0" href="components/loginguru.php">Login Guru</a>
			</li>
			<li class="nav-item">
				<a class="nav-link text-white border-0" href="components/loginmurid.php">Login Murid</a>
			</li>
		</ul>

		<div class='d-flex w-100 h-100 flex-column align-items-center' >

		<div class='p-3 bg-primary d-flex flex-row justify-content-center'>
			<div id="carouselExampleIndicators" class="carousel slide w-50" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
					<img class="d-block w-100" src="https://i.ytimg.com/vi/SzJ46YA_RaA/maxresdefault.jpg" alt="First slide">
					</div>
					<div class="carousel-item">
					<img class="d-block w-100" src="./imgs/programming.jpg" alt="Second slide">
					</div>
					<div class="carousel-item">
					<img class="d-block w-100" src="https://www.hollandisc.com/-/media/ISC/HollandV2/Blog/Holland_blog_circuit_board_700.jpg?h=450&la=en&mh=450&mw=700&w=700&hash=3E8CFB9BE5D453BA3C1082FD9C9CA07EE449F49F" alt="Third slide">
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			<div class='w-50 m-3'>
				<h3 class='display-4'>	SELAMAT DATANG KE WEB KUIZ SAINS KOMPUTER	</h3>
				<h3>
					<small>		
				Ilmu komputer adalah bidang yang luas yang menyentuh hampir semua perkara yang kita hadapi dalam kehidupan seharian. Setiap aplikasi telefon bimbit dan program komputer bergantung pada kepakaran seorang saintis komputer. Sistem yang mengawal kapal terbang, menguruskan perdagangan saham, memandu peluru berpandu, dan memantau kesihatan juga bergantung pada sains komputer. Ilmuwan komputer membina alat yang membolehkan kita menyelesaikan tugas dengan cekap, tepat, dan selamat.
					</small>
				</h3>

			</div>

		</div>

			<div class='d-flex flex-row float-left w-100'>
				<!--	
				<button class="m-5 button" onClick="window.location.href='components/loginguru.php'" align="center">Login Guru</button><br><br>
				<button class="m-5 button" onClick="window.location.href='components/loginmurid.php'" align="center">Login Murid</button><br><br> </form>
				-->
				<div class='d-flex flex-column float-left w-100'>

					<h1 class='w-50  m-2 float-left font-weight-bold'>
						Tahukah anda?
					</h1>
					<h3 class='w-50 m-2  float-left'>
						<small >
					Teknologi komputer telah membentuk dunia kita dan terlibat dalam hampir setiap sektor masyarakat kontemporari. Akibatnya, sains komputer adalah salah satu bidang yang paling pesat berkembang dan kelihatan seperti itu untuk masa depan yang boleh dijangka. Dengan ijazah sains komputer, anda boleh mendapati diri anda bekerja di pelbagai organisasi, membantu dalam pembangunan perisian, penyelenggaraan pangkalan data, atau pembuatan laman web. Terdapat juga peluang kerjaya dalam bidang lain, seperti kewangan, penguatkuasaan undang-undang dan reka bentuk.
					
						</small>
					</h3>

				</div>

				<img class='img-fluid w-50 h-100'src='./imgs/idea.png' alt='idea'>

			</div>	

			<div class='bg-primary w-100 '>

			<img class='img-fluid w-50 h-100 m-'src='./imgs/book.jpg' alt='book'>


				<div class='d-flex flex-column float-right w-50'>
					<h3 class='mt-4 mb-4 mx-2 display-4'>	Buku Rujukan:	</h3>
						<h3 class='m-3'>
								
							
							<button class='btn btn-outline-light btn-large'>
								<a class='text-dark' href="https://online.anyflip.com/wexi/pjsx/mobile/index.html">Buku Teks Sains Komputer T5</a>
							</button>	
						</h3>

						<h3 class='m-3'>
							<button class='btn btn-outline-light btn-large'>
								<a class='text-dark' href="https://online.anyflip.com/wexi/bwqu/mobile/index.html">Buku Teks Sains Komputer T4</a>
							</button>

						</h3>
				</div>
			</div>
		</div>

		<button onclick="topFunction()" id="goToTopButton"><h3 style='position:relative;bottom:10px;'>↑</h3></button>

		<script>
			//Get the button
			var mybutton = document.getElementById("goToTopButton");

			// When the user scrolls down 20px from the top of the document, show the button
			window.onscroll = function() {scrollFunction()};

			function scrollFunction() {
			if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
				mybutton.style.display = "block";
			} else {
				mybutton.style.display = "none";
			}
			}

			// When the user clicks on the button, scroll to the top of the document
			function topFunction() {
				document.body.scrollTop = 0;
				document.documentElement.scrollTop = 0;
			}
		</script>
	</body>

</html>
