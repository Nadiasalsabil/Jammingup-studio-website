<?php
include  "../control/koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Jammingup Studio | Official</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header">
			
		<!-- Top Bar -->
		<div class="top_bar">
			<div class="top_bar_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
								<ul class="top_bar_contact_list">
									<li><div class="question">Have any questions?</div></li>
									<li>
										<i class="fa fa-phone" aria-hidden="true"></i>
										<div>001-1234-88888</div>
									</li>
									<li>
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
										<div>Jammingupstudio@gmail.com</div>
									</li>
								</ul>
								<div class="top_bar_login ml-auto">
									<div class="login_button"><a href="#">Register or Login</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>				
		</div>

		<!-- Header Content -->
		<div class="header_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_content d-flex flex-row align-items-center justify-content-start">
							<div class="logo_container">
								<a href="#">
									<div class="logo_text">Jammingup<span>Studio</span></div>
								</a>
							</div>
							<nav class="main_nav_contaner ml-auto">
								<ul class="main_nav">
									<li class="active"><a href="#">Home</a></li>
									<li ><a href="halaman/page.php?halaman=About">About</a></li>
									<li><a href="halaman/page.php?halaman=Article">Article</a></li>
									<li><a href="halaman/page.php?halaman=Document">Document</a></li>
								</ul>
								

								<!-- Hamburger -->

							
								<div class="hamburger menu_mm">
									<i class="fa fa-bars menu_mm" aria-hidden="true"></i>
								</div>
							</nav>

						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Header Search Panel -->
		<div class="header_search_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="header_search_content d-flex flex-row align-items-center justify-content-end">
							<!-- <form action="#" class="header_search_form">
								<input type="search" class="search_input" placeholder="Search" required="required">
								<button class="header_search_button d-flex flex-column align-items-center justify-content-center">
									<i class="fa fa-search" aria-hidden="true"></i>
								</button>
							</form> -->
						</div>
					</div>
				</div>
			</div>			
		</div>			
	</header>

	<!-- Menu -->

	<div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<div class="search">
			<!-- <form action="#" class="header_search_form menu_mm">
				<input type="search" class="search_input menu_mm" placeholder="Search" required="required">
				<button class="header_search_button d-flex flex-column align-items-center justify-content-center menu_mm">
					<i class="fa fa-search menu_mm" aria-hidden="true"></i>
				</button>
			</form> -->
		</div>
		<nav class="menu_nav">
			<ul class="menu_mm">
				<li class="menu_mm"><a href="index.html">Home</a></li>
				<li class="menu_mm"><a href="halaman/page.php?halaman=About">About</a></li>
				<li class="menu_mm"><a href="halaman/page.php?halaman=Article">Article</a></li>
				<li class="menu_mm"><a href="halaman/page.php?halaman=Document">Document</a></li>
		</nav>
	</div>
	
	<!-- Home -->

	<div class="home">
		<div class="home_slider_container">
			
			<!-- Home Slider -->
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/slider2.jpg)"></div>
					<div class="home_slider_content">
						<div class="container">
							<div class="row">
								<div class="col text-center">
									<!-- <div class="home_slider_title">Jammingup Studio Official</div>
									<div class="home_slider_subtitle">Future Of Millenials Technology</div> -->
									<div class="home_slider_form_container">

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/slider2.jpg)"></div>
					<div class="home_slider_content">
						<div class="container">
							<div class="row">
								<div class="col text-center">
								<!-- <div class="home_slider_title">Jammingup Studio Official</div>
									<div class="home_slider_subtitle"><font color="#001a66">Future Of Millenials Technology</div> -->
									<div class="home_slider_form_container">
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(images/slider2.jpg)"></div>
					<div class="home_slider_content">
						<div class="container">
							<div class="row">
								<div class="col text-center">
								<!-- <div class="home_slider_title">Jammingup Studio Official</div>
									<div class="home_slider_subtitle">Future Of Millenials Technology</div> -->
									<div class="home_slider_form_container">
										
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

		<!-- Home Slider Nav -->

		<div class="home_slider_nav home_slider_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
		<div class="home_slider_nav home_slider_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
	</div>

	<!-- Features -->

	<div class="features">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Welcome To Jammingup Studio</h2>
					</div>
				</div>
			</div>
			<div class="row features_row">
				
				<!-- Features Item -->
				<div class="col-lg-4 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="images/icon_1.png" alt=""></div>
						<h3 class="feature_title">A Good Think</h3>
						<div class="feature_text"><p>Jammingup Studio, kami berfikir dan mengeluarkan ide ide dalam mengembangkan sebuah produk</p></div>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-4 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="images/icon_2.png" alt=""></div>
						<h3 class="feature_title">Learn Together</h3>
						<div class="feature_text"><p>Belajar Bersama dan dapatkan ilmu baru serta pengalaman baru</p></div>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-4 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="images/icon_3.png" alt=""></div>
						<h3 class="feature_title">Have Fun With Coding</h3>
						<div class="feature_text"><p>Menikmati setiap proses dalam mengoding untuk membuat suatu produk jammingup studio</p></div>
					</div>
				</div>

				<!-- Features Item -->
				<!-- <div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="images/icon_4.png" alt=""></div>
						<h3 class="feature_title">Award & Reward</h3>
						<div class="feature_text"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p></div>
					</div>
				</div> -->

			</div>
		</div>
	</div>

	<!-- Popular Courses -->

	<div class="courses">
		<div class="section_background parallax-window" data-parallax="scroll" data-image-src="images/courses_background.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Article Jammingup Studio</h2>
						<div class="section_subtitle"><p>Kami menyediakan artikel bagi para pengunjung website 
							yang menyajikan seputar teknologi-teknologi terupdate dari luar dan dalam negeri
						</p></div>
					</div>
				</div>
			</div>
			<div class="row courses_row">
				
				<!-- Course -->
				<?php
			  		require("../control/artikel.php");
					  $Squad = new Artikel();
					  $show = $Squad->showArt();
						  while($data = $show->fetch(PDO::FETCH_OBJ))
						  {
				  echo'
				<div class="col-lg-4 course_col">
					<div class="course">
						<div class="course_image"><img src="../view/j_admin/j_article/article-picture/'.$data->picture.'" width="100%" alt=""></div>
						<div class="course_body">
							<h3 class="course_title"><a href="artikeldetail.php?id='.$data->id_article.'">'.$data->article.'</a></h3>
							<div class="course_teacher"><i>Sumber &nbsp;'.$data->sumber.'</i></div>
						</div>
						<div class="course_footer">
							<div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
								<div class="course_info">
									<i class="fa fa-calendar" aria-hidden="true"></i>
									<span>'.$data->tgl_post.'</span>
								</div>
								<div class="course_info">
								
								</div>
								
							</div>
						</div>
					</div>
				</div>
				
				';
                            
			}
		?> 

				<!-- Course -->
				

				<!-- Course -->
				

			</div>
			<div class="row">
				<div class="col">
					<div class="courses_button trans_200"><a href="halaman/page.php?halaman=Article">Lihat Semua Artikel</a></div>
				</div>
			</div>
		</div>
	</div>

<div class="features" >
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Jammingup Studio Service</h2>
					</div>
				</div>
			</div>
			<div class="row features_row">
				
				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="images/icon1.jpg" alt=""></div>
						<h3 class="feature_title">Website Application</h3>
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="images/icon2.png" alt=""></div>
						<h3 class="feature_title">Dekstop Application</h3>
						
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="images/icon3.png" alt=""></div>
						<h3 class="feature_title">Mobile Application</h3>
						
					</div>
				</div>

				<!-- Features Item -->
				<div class="col-lg-3 feature_col">
					<div class="feature text-center trans_400">
						<div class="feature_icon"><img src="images/icon4.png" alt=""></div>
						<h3 class="feature_title">Design & Animasi</h3>
						
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Counter -->

	<div class="counter">
		<div class="counter_background" style="background-image:url(images/counter_background1.jpg)"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="counter_content">
						<h2 class="counter_title">Make a Project</h2>
						<div class="counter_text"><p>Buat Aplikasi anda di Jammingup Studio, anda bisa memilih sesuai keperluan anda mulai dari 
							Company Profile, Aplikasi Dekstop, Dashboard, Game, Mobile Aps , Design dan Animasi.</p></div>

						<!-- Milestones -->

						<div class="milestones d-flex flex-md-row flex-column align-items-center justify-content-between">
							<br>
						</div>
					</div>

				</div>
			</div>

			<?php
				require("../control/project.php");

				if(isset($_POST['addMessage']))
				{
					$nama        = $_POST['nama'];
					$hp			 = $_POST['hp'];
					$perusahaan	 = $_POST['perusahaan'];
					$email		 = $_POST['email'];
					$jenis		 = $_POST['jenis'];
					$pesan       = $_POST['pesan'];

					$Lib = new Library();
					$add = $Lib->addMessage('',$nama, $hp, $perusahaan, $email, $jenis, $pesan);
					
					if($add == "Success")
					{
						echo "<script>window.alert('Data has been successfully saved !');location = 'index.php'</script> ";
					}
					else
					{
						echo "<script>window.alert('Data has not been successfully saved !');location = 'index.php'</script> ";
					}
					
					
				}
				


			?>

			<div class="counter_form">
				<div class="row fill_height">
					<div class="col fill_height">
						<form class="counter_form_content d-flex flex-column align-items-center justify-content-center" method="POST"><br>
							<div class="counter_form_title">Register now</div>
							<input type="text" class="counter_input" name="nama" placeholder="Name" required="required">
							<input type="number" class="counter_input" name="hp" placeholder="Handphone" required="required">
							<input type="text" class="counter_input" name="perusahaan" placeholder="Company" required="required">
							<input type="email" class="counter_input" name="email" placeholder="Email" required="required">
							<select name="jenis" id="jenis" class="counter_input counter_options">
								<option>Pilih Jenis Project</option>
								<option>Website</option>
								<option>Dekstop</option>
								<option>Mobile</option>
								<option>Design & Animasi</option>
								<option>Workshop Basic Programming</option>
							</select>
							<textarea class="counter_input counter_text_input" name="pesan" placeholder="Message" required="required"></textarea>
							<button type="submit" class="counter_form_button" name="addMessage">submit Message</button><br>
						</form>
					</div>
				</div>
			</div>

		</div>
	</div>

	<!-- Events -->

	<div class="events">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Upcoming events Jammingup studio</h2>
						<div class="section_subtitle"><p>Kegiatan yang akan diadakan oleh jammingup Studio</p></div>
					</div>
				</div>
			</div>
			<div class="row events_row">

				<!-- Event -->
				<div class="col-lg-4 event_col">
					<div class="event event_left">
						<div class="event_image"><img src="images/slide1.jpg" alt=""></div>
						<div class="event_body d-flex flex-row align-items-start justify-content-start">
							<div class="event_date">
								<div class="d-flex flex-column align-items-center justify-content-center trans_200">
									<div class="event_day trans_200">21</div>
									<div class="event_month trans_200">Aug</div>
								</div>
							</div>
							<div class="event_content">
								<div class="event_title"><a href="#">Which Country Handles Student Debt?</a></div>
								<div class="event_info_container">
									<div class="event_info"><i class="fa fa-clock-o" aria-hidden="true"></i><span>15.00 - 19.30</span></div>
									<div class="event_info"><i class="fa fa-map-marker" aria-hidden="true"></i><span>25 New York City</span></div>
									<div class="event_text">
										<p>Policy analysts generally agree on a need for reform, but not on which path...</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Event -->
				<div class="col-lg-4 event_col">
					<div class="event event_mid">
						<div class="event_image"><img src="images/slide1.jpg" alt=""></div>
						<div class="event_body d-flex flex-row align-items-start justify-content-start">
							<div class="event_date">
								<div class="d-flex flex-column align-items-center justify-content-center trans_200">
									<div class="event_day trans_200">27</div>
									<div class="event_month trans_200">Aug</div>
								</div>
							</div>
							<div class="event_content">
								<div class="event_title"><a href="#">Repaying your student loans (Winter 2017-2018)</a></div>
								<div class="event_info_container">
									<div class="event_info"><i class="fa fa-clock-o" aria-hidden="true"></i><span>09.00 - 17.30</span></div>
									<div class="event_info"><i class="fa fa-map-marker" aria-hidden="true"></i><span>25 Brooklyn City</span></div>
									<div class="event_text">
										<p>This Consumer Action News issue covers topics now being debated before...</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Event -->
				<div class="col-lg-4 event_col">
					<div class="event event_right">
						<div class="event_image"><img src="images/slide1.jpg" alt=""></div>
						<div class="event_body d-flex flex-row align-items-start justify-content-start">
							<div class="event_date">
								<div class="d-flex flex-column align-items-center justify-content-center trans_200">
									<div class="event_day trans_200">01</div>
									<div class="event_month trans_200">Sep</div>
								</div>
							</div>
							<div class="event_content">
								<div class="event_title"><a href="#">Alternative data and financial inclusion</a></div>
								<div class="event_info_container">
									<div class="event_info"><i class="fa fa-clock-o" aria-hidden="true"></i><span>13.00 - 18.30</span></div>
									<div class="event_info"><i class="fa fa-map-marker" aria-hidden="true"></i><span>25 New York City</span></div>
									<div class="event_text">
										<p>Policy analysts generally agree on a need for reform, but not on which path...</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Team -->

	<div class="team">
		<div class="team_background parallax-window" data-parallax="scroll" data-image-src="images/team_back.jpg"   data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
					<h2 class="section_title"> Jammingup Studio Squad</h2>
						<div class="section_subtitle"><p>Tim Jammingup Studio yang berdedikasi dalam membangun Jammingup Studio</p></div>
					</div>
				</div>
			</div>
			<div class="row team_row">
				
				<!-- Team Item -->
				<div class="col-lg-3 col-md-6 team_col">
					<div class="team_item">
						<div class="team_image"><img src="images/amis.jpg" alt=""></div>
						<div class="team_body">
							<div class="team_title"><a href="#">Nico Chrisandy</a></div>
							<div class="team_subtitle">Founder & Website Development</div>
							<button type="submit" class="counter_form_button">My Portfolio</button>
							<div class="social_list">
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-github" aria-hidden="true"></i></a></li>
								</ul>
							</div>
							
						</div>
						>
					</div>
				</div>

				<!-- Team Item -->
				<div class="col-lg-3 col-md-6 team_col">
					<div class="team_item">
						<div class="team_image"><img src="images/farhan.jpg" alt=""></div>
						<div class="team_body">
							<div class="team_title"><a href="#">Mohammad Farhan</a></div>
							<div class="team_subtitle">Founder & Mobile Development</div>
							<button type="submit" class="counter_form_button">My Portfolio</button>
							<div class="social_list">
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-github" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Team Item -->
				<div class="col-lg-3 col-md-6 team_col">
					<div class="team_item">
						<div class="team_image"><img src="images/dennis.jpg" alt=""></div>
						<div class="team_body">
							<div class="team_title"><a href="#">Dennis Akira</a></div>
							<div class="team_subtitle">Founder & Mobile Development</div>
							<button type="submit" class="counter_form_button">My Portfolio</button>
							<div class="social_list">
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-github" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Team Item -->
				<div class="col-lg-3 col-md-6 team_col">
					<div class="team_item">
						<div class="team_image"><img src="images/lontong.jpg" alt=""></div>
						<div class="team_body">
							<div class="team_title"><a href="#">Wahyu Mahendra</a></div>
							<div class="team_subtitle">Founder & Design</div>
							<button type="submit" class="counter_form_button">My Portfolio</button>
							<div class="social_list">
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-github" aria-hidden="true"></i></a></li>
									
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Team Item -->
				<div class="col-lg-3 col-md-6 team_col">
					<div class="team_item">
						<div class="team_image"><img src="images/ueb.jpg" alt=""></div>
						<div class="team_body">
							<div class="team_title"><a href="#">Ilman Niar Latif</a></div>
							<div class="team_subtitle">Founder & Mobile Development</div>
							<button type="submit" class="counter_form_button">My Portfolio</button>
							<div class="social_list">
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-github" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Team Item -->
				<div class="col-lg-3 col-md-6 team_col">
					<div class="team_item">
						<div class="team_image"><img src="images/nadia-2.jpg" alt=""></div>
						<div class="team_body">
							<div class="team_title"><a href="#">Nadia Salsabil</a></div>
							<div class="team_subtitle">Founder | Website Development</div>
							<button type="submit" class="counter_form_button">My Portfolio</button>
							<div class="social_list">
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-github" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Team Item -->
				<div class="col-lg-3 col-md-6 team_col">
					<div class="team_item">
						<div class="team_image"><img src="images/kame.jpg" alt=""></div>
						<div class="team_body">
							<div class="team_title"><a href="#">Riska Amelia</a></div>
							<div class="team_subtitle">Founder & Mobile Development</div>
							<button type="submit" class="counter_form_button">My Portfolio</button>
							<div class="social_list">
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-github" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>

				<!-- Team Item -->
				<div class="col-lg-3 col-md-6 team_col">
					<div class="team_item">
						<div class="team_image"><img src="images/nanas.jpg" alt=""></div>
						<div class="team_body">
							<div class="team_title"><a href="#">Ela Nastika</a></div>
							<div class="team_subtitle">Founder & Dekstop Development</div>
							<button type="submit" class="counter_form_button">My Portfolio</button>
							<div class="social_list">
								<ul>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-github" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>


<!-- Newsletter -->

	<div class="newsletter">
		<div class="newsletter_background parallax-window" data-parallax="scroll" data-image-src="images/newsletter.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="newsletter_container d-flex flex-lg-row flex-column align-items-center justify-content-start">

						<!-- Newsletter Content -->
						<div class="newsletter_content text-lg-left text-center">
							<div class="newsletter_title">Portfolio Jammingup Studio</div>
							<div class="newsletter_subtitle">Klik untuk melihat Portfolio kami.</div>
						</div>

						<!-- Newsletter Form -->
						<div class="newsletter_form_container ml-lg-auto">
							<form action="#" id="newsletter_form" class="newsletter_form d-flex flex-row align-items-center justify-content-center">
							<button type="submit" class="newsletter_button"><b>Our Portfolio</b></button>
							</form>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Latest News -->

	

	<!-- Footer -->

	<footer class="footer">
		<div class="footer_background" style="background-image:url(images/footer_background.png)"></div>
		<div class="container">
			<div class="row footer_row">
				<div class="col">
					<div class="footer_content">
						<div class="row">

							<div class="col-lg-8 footer_col">
					
								<!-- Footer About -->
								<div class="footer_section footer_about">
									<div class="footer_logo_container">
										<a href="#">
											<h3></h3><div class="footer_logo_text">Jammingup<span>Studio</span></div>
										</a>
									</div>
									<div class="footer_about_text">
										<p>Media Sosial Jammingup Studio.</p>
									</div>
									<div class="footer_social">
										<ul>
											<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-github" aria-hidden="true"></i></a></li>
										</ul>
									</div>
								</div>
								
							</div>

							<div class="col-lg-4 footer_col">
					
								<!-- Footer Contact -->
								<div class="footer_section footer_contact">
									<div class="footer_title">Contact Us</div>
									<div class="footer_contact_info">
										<ul>
											<li>Email: jammingupstudio@gmail.com</li>
											<li>Phone:  +(88) 111 555 666</li>
											<li>DKI Jakarta, Indonesia</li>
										</ul>
									</div>
								</div>
								
							</div>

							

						

						</div>
					</div>
				</div>
			</div>

			<div class="row copyright_row">
				<div class="col">
					<div class="copyright d-flex flex-lg-row flex-column align-items-center justify-content-start">
						<div class="cr_text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> Jammingupstudio | Official </a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
						<div class="ml-lg-auto cr_links">
							<ul class="cr_list">
								<li><a href="#">Copyright notification</a></li>
								<li><a href="#">Terms of Use</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/custom.js"></script>
</body>
</html>