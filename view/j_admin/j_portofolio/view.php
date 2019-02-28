<?php

require("config/lib.php");
    $Lib = new Library();
    $show = $Lib->viewPort($_GET['id']);
    $data = $show->fetch(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">
<body>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
            
            <div class="row purchace-popup">
            <div class="col-12">
              <span class="d-block d-md-flex align-items-center">
                <h2>Our Portofolio</h2>
                <a class="btn ml-auto "></a>
                <a href="dashboard.php?page=portofolio"><button type="button" class="btn btn-warning btn-rounded btn-fw">Back</button></a>
              </span>
            </div>
          </div><?php
        echo'
          <div class="row">
            <div class="col-12 grid-margin">
              <div class="card">
                    <div class="row ticket-card mt-3 pb-2 border-bottom pb-3 mb-3">
                      <div class="ticket-details col-md-9">       
                        <div class="d-flex">
                            <img src="j_portofolio/portofolio-pict/'.$data->gambar.'" height="200" width="370">
                            <div class="col-7">
                            <table border=0>
                            <tr>
                            <td width=90>Title</td>
                            <td width=30>:</td>
                            <td width=50>'.$data->judul.'</td>
                            </tr>
                            <tr>
                            <td width=90>Category</td>
                            <td width=30>:</td>
                            <td width=50>'.$data->kategori.'</td>
                            </tr>
                            <tr>
                            <td width=90>Type</td>
                            <td width=30>:</td>
                            <td width=50>'.$data->jenis_portofolio.'</td>
                            </tr>
                            <tr>
                            <td width=90>Role</td>
                            <td width=30>:</td>
                            <td width=50>'.$data->roles.'</td>
                            </tr>
                            <tr>
                            <td width=90>Link Video</td>
                            <td width=30>:</td>
                            <td width=50>'.$data->video.'</td>
                            </tr>
                            <tr>
                            <td width=90>Description</td>
                            <td width=30>:</td>
                            <td width=50>'.$data->deskripsi.'</td>
                            </tr>
                            </table>
                          </div>
                        </div>
                        <p class="text-gray ellipsis mb-2"></p>
                        <div class="row text-gray d-md-flex d-none">
                          <div class="col-4 d-flex">
                            <small class="mb-0 mr-2 text-muted text-muted"></small>
                            <small class="Last-responded mr-2 mb-0 text-muted text-muted"></small>
                          </div>
                          <div class="col-4 d-flex">
                            <small class="mb-0 mr-2 text-muted text-muted"></small>
                            <small class="Last-responded mr-2 mb-0 text-muted text-muted"></small>
                          </div>
                        </div>
                      </div>
                      </div>
                    </div>
                        </div>
                  </div>
                  ';                        ?>       
          </div>
      </div>
</body>
</html>