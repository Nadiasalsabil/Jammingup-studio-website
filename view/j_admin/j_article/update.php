<?php
    require("config/lib.php");
    $Lib = new Library();
    $show = $Lib->editArt($_GET['id']);
    $data = $show->fetch(PDO::FETCH_OBJ);
if (isset($_POST['updateArt']))
{
        $id             = $_POST['id'];
        $article        = $_POST['article'];
        $description    = $_POST['description'];
 
        //file
        $picture = $_FILES['picture']['name']; //ambil image
        $type = $_FILES['picture']['type']; //jenis image
        $size = $_FILES['picture']['size']; //ukuran image   
        $temp = $_FILES['picture']['tmp_name']; //nama file yang disimpan
        $path= "j_article/article-picture/".$picture;    //folder upload
        
        
    if(move_uploaded_file($temp,$path));
        {
            $Lib = new Library();
            $update = $Lib->updateArt($id, $article, $description, $picture);
        if($update == "Success")
        {
            echo "<script>window.alert('Data has been successfully Updated !');location = 'dashboard.php?page=article'</script> ";
        }
        else
        {
            echo "<script>window.alert('Data has not been successfully Update !');location = 'dashboard.php?page=updateArt&id=$data->id_article'</script> ";
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
                  <h4 class="card-title"><h3>Update Article</h3></h4>
                  <form class="forms-sample" method="POST" enctype="multipart/form-data">
                      <input name="id" type="hidden" value="<?php echo $data->id_article ?>"/>
                    <div class="form-group">
                      <label for="exampleInputName1"><h4>Title</h4></label>
                      <input type="text" class="form-control" id="exampleInputName1" name="article" value="<?php echo $data->article ?>" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleTextarea1"><h4>Description</h4></label>
                      <textarea class="form-control" id="exampleTextarea1" rows="4" name="description" placeholder="<?php echo $data->description ?> "value="<?php echo $data->description ?>" required></textarea>
                    </div>
                    <div class="form-group">
                      <label><h4>Picture</h4></label><br>
                      <input type="file" name="picture" required><br><br>
                        <p><img src="j_article/article-picture/<?php echo $data->picture ?>" height="100" width="100"></p>
                      <div class="input-group col-xs-12">
                      </div>
                    </div>
                      <div class="form-group">
                      <label for="exampleInputName1"><h4>Date Post</h4></label>
                      <input type="text" class="form-control" id="exampleInputName1" name="date" value="<?php echo $data->date_post ?>" required disabled>
                    </div>
                    <button type="submit" name="updateArt" class="btn btn-success mr-2">Submit</button>
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