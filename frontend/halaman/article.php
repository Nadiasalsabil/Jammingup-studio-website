<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="index.html">Home</a></li>
								<li>Article</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>			
	</div>

	<!-- Courses -->

	<div class="courses">
		<div class="container">
			<div class="row">

				<!-- Courses Main Content -->
				<div class="col-lg-8">
					<div class="courses_search_container">
						
					</div>
					<div class="courses_container">
						<div class="row courses_row">
                            <!-- Course -->
                            <?php
                                require("../../control/art.php");
                                $Squad = new Library();
                                $show = $Squad->showArt();
                                    while($data = $show->fetch(PDO::FETCH_OBJ))
                                    {
                            echo'
							<div class="col-lg-6 course_col">
								<div class="course">
									<div class="course_image"><img src="../../view/j_admin/j_article/article-picture/'.$data->picture.'" alt=""></div>
									<div class="course_body">
                                    <h3 class="course_title"><a href="../artikeldetail.php?id='.$data->id_article.'">'.$data->article.'</a></h3>
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
				</div>
				
						<div class="row pagination_row">
							<div class="col"> <hr />
							<div class="add_comment_title">Kritik dan Saran</div>
							<div class="add_comment_text">tuliskan kritik saran dan request tentang artikel kami *</div>
							<?php

								require("../../control/kritiksaran.php");

								if(isset($_POST['addKritiksaran']))
								{
									$kritiksaran = $_POST['ks'];
									$nama		 = $_POST['nama'];
									$email		 = $_POST['email'];

									$Lib = new Kritik();
									$add = $Lib->addKritiksaran('', $kritiksaran, $nama, $email);

									if($add == "Success")
									{
										echo "<script>window.alert('Data has been successfully saved !');location = 'page.php?halaman=Article'</script> ";
									}
									else
									{
										echo "<script>window.alert('Data has not been successfully saved !');location = 'page.php?halaman=Article'</script> ";
									}
								}
							?>
							<form method="POST" class="comment_form">
								<div>
									<div class="form_title">Kritik dan Saran*</div>
									<textarea class="comment_input comment_textarea" name="ks" required="required"></textarea>
								</div>
								<div class="row">
									<div class="col-md-6 input_col">
										<div class="form_title">Nama*</div>
										<input type="text" class="comment_input" name="nama" required="required">
									</div>
									<div class="col-md-6 input_col">
										<div class="form_title">Email*</div>
										<input type="email" class="comment_input" name="email" required="required">
									</div>
								</div>
								<div>
									<button type="submit" name="addKritiksaran" class="comment_button trans_200">submit</button>
								</div>
							</form>
							</div>
						</div>
					</div>
					
				</div>
				

				<!-- Courses Sidebar -->
				<div class="col-lg-4">
					<div class="sidebar">

						<!-- Categories -->
						

						<!-- Latest Course -->
						<div class="sidebar_section">
							<div class="sidebar_section_title">Latest Article</div>
							<div class="sidebar_latest">
                            <?php
                                    require("../../control/artikel.php");
                                    $Squad = new Artikel();
                                    $show = $Squad->showArt();
                                        while($data = $show->fetch(PDO::FETCH_OBJ))
                                        {
                                echo'
								<!-- Latest Course -->
								<div class="latest d-flex flex-row align-items-start justify-content-start">
									<div class="latest_image"><div><img src="../../view/j_admin/j_article/article-picture/'.$data->picture.'" alt=""></div></div>
									<div class="latest_content">
                                        <div class="latest_title"><a href="../artikeldetail.php?id='.$data->id_article.'">'.$data->article.'</a></div>
                                        <div class="course_teacher"><i>Sumber &nbsp;'.$data->sumber.'</i></div>
										
									</div>
                                </div>
                                ';
                            
                        }
                    ?> 
                                


								

							

							</div>
						</div>


						
						

						<!-- Gallery -->
					

						<!-- Tags -->
						<!--  -->

						<!-- Banner -->
						<!--  -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	

	<!-- Newsletter -->

	
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="js/courses.js"></script>
</body>
</html>