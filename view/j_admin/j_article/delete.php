<?php
    require("config/lib.php");
    $Lib = new Library();
    $delete = $Lib->deleteArt($_GET['id']);

        if($delete == "Success")
        {
            echo "<script>window.alert('Data has been successfully Deleted !');location = 'dashboard.php?page=article'</script> ";
        }
        else
        {
            echo "<script>window.alert('Data has not been successfully Delete !');location = 'dashboard.php?page=updateArt&id=$data->id_article'</script> ";
        }
?>