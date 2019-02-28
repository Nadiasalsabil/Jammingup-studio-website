 <div id="our-team" style="background-color: #ccf2ff;">
    <div class="container">
      <div class="text-left"><br><br><br>
       <!--  <img src="asset_frontend/img/g1.png" width="20%"> -->
         <img src="asset_frontend/img/ar.png" width="50%">
      </div>
    
      </div>
    </div>
  </div>


  <div id="our-team" style="background-color: white;">
    <div class="container">
      <div class="text-left">
      <div class="row">
		  <div class="col-sm-4">
		  	<div class="panel-group">
    <div class="panel panel-default">
      <div class="panel-heading"><b><center>Update News</center></b></div>
      <div class="panel-body">
      	 <?php
                  require("../control/artikel.php");
                  $Squad = new Artikel();
                  $show = $Squad->showArt();
                    while($data = $show->fetch(PDO::FETCH_OBJ))
                    {
                        echo'

                   <center><img class="img-sm mb-4 mb-md-8" src="../view/j_admin/j_article/article-picture/'.$data->picture.'" width="70%"><br><br>
                   <i class="fa fa-calendar" style="font-size:14px"> '.$data->tgl_post.'</i>
                  <h2><b> '.$data->article.'</b><br><button type="button" class="btn btn-primary btn-xs">Read More</button></h2> <hr/><hr />
                    ';
                            
                            }
                        ?>  


      	
      </div>
    </div>
		  </div>
		</div>
		  <div class="col-sm-8">

		  	<div class="panel panel-default">
			  <div class="panel-body">
			  		<?php
			  		 require("../control/art.php");
	                  $Squad = new Library();
	                  $show = $Squad->showArt();
	                    while($dataa = $show->fetch(PDO::FETCH_OBJ))
	                    {
	                        echo'
	                         <h2><b> '.$dataa->article.'</b></h2><br>
	                         <img class="img-sm mb-4 mb-md-8" src="../view/j_admin/j_article/article-picture/'.$dataa->picture.'" width="70%">
	                         <br><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		                   <i class="fa fa-calendar" style="font-size:14px"> '.$dataa->tgl_post.'</i>&nbsp;&nbsp;&nbsp;
		                     <i class="fa fa-edit" style="font-size:14px"> '.$dataa->sumber.'</i>
		                   <p align="justify"><br>'.$dataa->description.'<b>........</b></p>
		                    <button type="button" class="btn btn-primary btn-xs">Read More</button></h2> <hr/>






	                     ';
	                 }

			  		?>
			  </div>
			</div>
		  </div>
		 
	  </div>
        
      </div>
    
      </div>
    </div>
  </div>