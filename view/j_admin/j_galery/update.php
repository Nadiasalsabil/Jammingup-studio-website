<?php
    require("config/lib.php");
    $Lib = new Library();
    $show = $Lib->editGalery($_GET['id']);
    $data = $show->fetch(PDO::FETCH_OBJ);
if (isset($_POST['updateGalery']))
{
        $id             = $_POST['id'];
        $description    = $_POST['description'];
 
        //file
        $picture = $_FILES['picture']['name']; //ambil image
        $type = $_FILES['picture']['type']; //jenis image
        $size = $_FILES['picture']['size']; //ukuran image   
        $temp = $_FILES['picture']['tmp_name']; //nama file yang disimpan
        $path= "j_galery/galery/".$picture;    //folder upload
        
        
    if(move_uploaded_file($temp,$path));
        {
            $Lib = new Library();
            $update = $Lib->updateGalery($id, $picture, $description);
        if($update == "Success")
        {
            echo "<script>window.alert('Data has been successfully Updated !');location = 'dashboard.php?page=galery'</script> ";
        }
        else
        {
            echo "<script>window.alert('Data has not been successfully Update !');location = 'dashboard.php?page=updateGalery&id=$data->id'</script> ";
        }
    }
        }
    

?>
<!DOCTYPE html>
<html lang="en">

<head>
</head>
<body>      
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title"><h3>Update Galery</h3></h4>
                  <form class="forms-sample" method="POST" enctype="multipart/form-data">
                      <input name="id" type="hidden" value="<?php echo $data->id ?>"/>                    
                    <div class="form-group">
                      <label for="exampleTextarea1"><h4>Description</h4></label>
                      <textarea class="form-control" id="exampleTextarea1" rows="4" name="description" placeholder="<?php echo $data->deskripsi ?> "value="<?php echo $data->deskripsi ?>" required></textarea>
                    </div>
                    <div class="form-group">
                      <label><h4>Picture</h4></label><br>
                      <input type="file" name="picture" required><br><br>
                        <p><img src="j_galery/galery/<?php echo $data->gambar ?>" height="200" width="400"></p>
                      <div class="input-group col-xs-12">
                      </div>
                    </div>
                    <button type="submit" name="updateGalery" class="btn btn-success mr-2">Submit</button>
                    <a href="dashboard.php?page=galery"><button class="btn btn-light" type="button">Cancel</button></a>
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