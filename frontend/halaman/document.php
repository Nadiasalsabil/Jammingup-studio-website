<div class="home">
		<div class="breadcrumbs_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="breadcrumbs">
							<ul>
								<li><a href="../index.php">Home</a></li>
								<li>Document</li>
							</ul>
					</div>
				</div>
			</div>
		</div>
	</div>			
</div>

<!-- Blog -->

	<div class="blog">
		<div class="container">
			<div class="row">

                <!-- Blog Content -->
                
                <?php
                    require("../../control/art.php");
                    $Squad = new Library();
                    $show = $Squad->showArt();
                    while($data = $show->fetch(PDO::FETCH_OBJ))
                        {
                            echo'
                                <div class="col-lg-12">
                                    <div class="blog_content">
                                        <div class="blog_title"></div>
                                        <div class="blog_meta">
                                            <ul>
                                                <li> </li>
                                                <li> </li>
                                            </ul>
                                        </div>
                                        <div class="blog_image"><img src="" alt=""></div>
                                        <p></p>
                                        </ul>
                                    </div>
                                </div><hr>
                                
                                ';
                            }
                        ?> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>


	

	