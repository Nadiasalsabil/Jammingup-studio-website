<?php
    require("config/lib.php");
    
    if(isset($_POST['addArt']))
    {
        $id_user = $_POST['id_user'];
        $judul = $_POST['title'];
        $kategori = $_POST['category'];
        $deskripsi = $_POST['description'];
        $jenis = $_POST['type'];
        $link = $_POST['link'];
        $role = $_POST['role'];        
 
        //file
        $picture = $_FILES['picture']['name']; //ambil image
        $type = $_FILES['picture']['type']; //jenis image
        $size = $_FILES['picture']['size']; //ukuran image   
        $temp = $_FILES['picture']['tmp_name']; //nama file yang disimpan
        $path= "j_portofolio/portofolio-pict/".$picture;    //folder upload
        
        
    if(move_uploaded_file($temp,$path));
        {
            $Lib = new Library();
            $add = $Lib->addPort('', $id_user, $judul, $kategori, $deskripsi, $jenis, $picture, $link, $role);
        if($add == "Success")
        {
            echo "<script>window.alert('Data has been successfully saved !');location = 'dashboard.php?page=portofolio'</script> ";
        }
        else
        {
            echo "<script>window.alert('Data has not been successfully saved !');location = 'dashboard.php?page=addPort'</script> ";
        }
    }
        }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <script src="../../assets/tinymce/js/tinymce/tinymce.min.js"></script>
<script>tinymce.init({selector:"textarea"});</script>
</head>
<body>      
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"><h3>New Portofolio</h3></h4>
                  <form class="forms-sample" method="POST" enctype="multipart/form-data">
                      <input name="id_user" value="<?php echo $_SESSION['user']; ?>" type="hidden">
                    <div class="form-group">
                      <label for="exampleInputName1"><h4>Title</h4></label>
                      <input type="text" class="form-control" id="exampleInputName1" name="title" required>
                    </div>
                    <div class="form-group">
                    <label for="exampleFormControlSelect2"><h4>Category</h4></label>
                    <select class="form-control" id="exampleFormControlSelect2" name="category">
                      <option value="andoroid">Android</option>
                      <option value="web">Web Base</option>
                      <option value="design">Design Grafis</option>
                    </select>
                  </div>
                      <div class="form-group">
                      <label for="exampleTextarea1"><h4>Description</h4></label>
                      <textarea class="form-control" id="exampleTextarea1" rows="4" name="description" required></textarea>
                    </div>
                      <div class="form-group">
                    <label for="exampleFormControlSelect2"><h4>Type of Portofolio</h4></label>
                    <select class="form-control" id="exampleFormControlSelect2" name="type">
                      <option value="team">Team</option>
                      <option value="individu">Individu</option>
                    </select>
                  </div>
                <div class="form-group">
                      <label for="exampleInputName1"><h4>Role</h4></label>
                      <input type="text" class="form-control" id="exampleInputName1" name="role" placeholder="Tester,Backend or ect" required>
                    </div>
                      <div class="form-group">
                      <label for="exampleInputName1"><h4>Link Video</h4></label>
                      <input type="text" class="form-control" id="exampleInputName1" name="link" placeholder="http:/....." required>
                    </div>
                    <div class="form-group">
                      <label><h4>Screenshoot <h5>(file must an .Jpg, .Png)</h5></h4></label><br>
                      <input type="file" name="picture" required>
                      <div class="input-group col-xs-12">
                      </div>
                    </div><br>
                    <button type="submit" name="addArt" class="btn btn-success mr-2">Submit</button>
                    <a href="dashboard.php?page=article"><button class="btn btn-light" type="button">Cancel</button></a>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <script src="../../vendors/js/vendor.bundle.addons.js"></script>
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/misc.js"></script>
</body>

</html>