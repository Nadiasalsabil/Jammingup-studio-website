<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="index.html">Home</a></li>
								<li>About</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

	<div class="feature">
		<div class="feature_background" parallax-window" data-parallax="scroll" data-image-src="images/team_back.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Gallery Jammingup Studio</h2>
					</div>
				</div>
			</div>
			<div class="sidebar_gallery">
								<ul class="gallery_items d-flex flex-row align-items-start justify-content-between flex-wrap">
									
								<?php
								require("../../control/gallery.php");
								$Squad = new Gallery();
								$show = $Squad->showGallery();
									while($data = $show->fetch(PDO::FETCH_OBJ))
									{
							echo'
								<li class="gallery_item">
										<div class="gallery_item_overlay d-flex flex-column align-items-center justify-content-center">+</div>
										<a class="colorbox" href="../../view/j_admin/j_galery/galery/'.$data->gambar.'">
											<img src="../../view/j_admin/j_galery/galery/'.$data->gambar.'" alt="">
										</a>
									</li>
									';
                            
								}
							?> 
								</ul>
							</div>


			
				
			</div>
		</div>
	</div>
	
	
	<!-- Features -->

    <div class="about">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">History Of Jammingup Studio</h2>
					
					</div>
				</div>
			</div>
			<div class="row about_row">
				
				<!-- About Item -->
				<div class="col-lg-12 about_col about_col_left">
					<div class="about_item">
						<div class="about_item_image"><center><img src="images/slide1.jpg" width="60%" alt=""></center></div>
						<div class="about_item_title"><a href="#">Our Stories</a></div>
						<div class="about_item_text">
							<p align="justify">Tepat di tanggal 23 Februari 2019, sekitar 9 orang dengan
                                latar belakang berbeda berkumpul. Kami berdiskusi wadah apa yang cocok
                                untuk menampung ide-ide kreatif dan sharing tentang bahasa pemrograman.
                                Karena kami ingin wadah ini tak ada campur tangan pihak manapun. Maka tercetuslah
                                untuk membuat sebuah studio bernama Jammingup Studio. Harapan kami suatu hari nanti
                                Jammingup Studio bisa menjadi Tempat yang besar nantinya.
                            </p>
						</div>
					</div>
                </div>
			</div>
		</div>
    </div>
    
    <!-- Feature -->

	<div class="feature">
		<div class="feature_background" style="background-image:url(images/courses_background.jpg)"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title_container text-center">
						<h2 class="section_title">Logo & Visi Misi <br>Jammingup Studio</h2>
						<div class="section_subtitle"><p>Berikut ini adalah logo , Deskripsi serta Visi dan Misi
                            Dari Jammingup Studio
                        </p></div>
					</div>
				</div>
			</div>
			<div class="row feature_row">

				<!-- Feature Content -->
				<div class="col-lg-6 feature_col">
					<div class="feature_content">
						<!-- Accordions -->
						<div class="accordions">
							
							<div class="elements_accordions">

								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center"><div>Deskripsi Jammingup Studio</div></div>
									<div class="accordion_panel">
										<p></p>
									</div>
								</div>

								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center active"><div>Logo Jammingup Studio</div></div>
									<div class="accordion_panel">
										<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
									</div>
								</div>

								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center"><div>Visi Jammingup Studio</div></div>
									<div class="accordion_panel">
										<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
									</div>
								</div>

								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center"><div>Misi Jammingup Studio</div></div>
									<div class="accordion_panel">
										<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
									</div>
								</div>

							</div>

						</div>
						<!-- Accordions End -->
					</div>
				</div>

				<!-- Feature Video -->
				<div class="col-lg-6 feature_col">
					<div class="feature_video d-flex flex-column align-items-center justify-content-center">
						<div class="feature_video_background" style="background-image:url(images/videos.png)"></div>
						<a class="vimeo feature_video_button" href="images/jamming.mp4" title="JAMMINGUP STUDIO LOGO OFFICIAL">
							<img src="images/play.png" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>


	