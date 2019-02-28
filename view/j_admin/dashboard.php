<?php
session_start();

if (!isset($_SESSION['name'])){
    header('Location: ../../index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard Admin</title>
  <link rel="stylesheet" href="../../assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.addons.css">
  <link rel="stylesheet" href="../../assets/css/style.css">
  <link rel="shortcut icon" href="../../assets/images/favicon.png" />
    
    <script src="../../assets/tinymce/js/tinymce/tinymce.min.js"></script>
<script>tinymce.init({selector:"textarea"});</script>
</head>

<body>
  <div class="container-scroller">
          <!-- Header -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="index.html">
          <img src="../../assets/logo.jpg" alt="logo" />
        </a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-right">
<li class="nav-item dropdown d-none d-xl-inline-block">
              <span class="profile-text">Hello <?php echo $_SESSION['name']; ?>, This is Jamming Administrator Page !</span>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
   <!-- Header Ends -->
      
    <div class="container-fluid page-body-wrapper">
        <!-- Aside -->
      <?php include "config/aside.php"; ?>
        <?php
    if(isset($_GET['page']))
    {
        switch($_GET['page'])
        {
            case'home';
            include 'home.php';
            break;
            case'logout';
            include'config/logout.php';
            break;
            
            //J-article
            case'article';
            include 'j_article/article.php';
            break;
            case'addArticle';
            include 'j_article/add.php';
            break;
            case'updateArticle';
            include 'j_article/update.php';
            break;
            case'deleteArticle';
            include 'j_article/delete.php';
            break;
            
            //J-article
            case'galery';
            include 'j_galery/galery.php';
            break;
            case'addGalery';
            include 'j_galery/add.php';
            break;
            case'updateGalery';
            include 'j_galery/update.php';
            break;
            case'deleteGalery';
            include 'j_galery/delete.php';
            break;
            
            //J-Portofolio
            case'portofolio';
            include 'j_portofolio/portofolio.php';
            break;
            case'addPort';
            include 'j_portofolio/add.php';
            break;
            case'viewPort';
            include 'j_portofolio/view.php';
            break;
            
            //J-Member
            case'member';
            include 'j_member/member.php';
            break;
        }
    }
?>
          <!-- Aside -->
    </div>
  </div>
  <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="../../assets/vendors/js/vendor.bundle.addons.js"></script>
  <script src="../../assets/js/off-canvas.js"></script>
  <script src="../../assets/js/misc.js"></script>  
  <script src="../../assets/js/dashboard.js"></script>  
</body>
</html>