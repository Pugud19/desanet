<?php 
require_once 'koneksi_db.php';

// include file fungsi
require_once 'models/Internet.php';
require_once 'models/member.php';
require_once 'models/todoList.php';
require_once 'models/masaAktif.php';

// logic index
$hal = $_GET['hal'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>DesaNet.</title>
  <!-- plugins css -->
  <?php include_once 'plugins/css/css_plugins.php' ?>
</head>
<body>
  <div class="container-scroller">
    <!-- navbar start -->
    <?php include_once 'views/components/navbar.php' ?>
    <!-- navbar end -->
    <!-- right_sidebar start  -->
    <?php include_once 'views/components/right_sidebar.php' ?>
    <!-- right_sidebar end -->
    <!-- main start -->
    <div class="container-fluid page-body-wrapper">
      <!-- left sidebar start -->
    <?php include_once 'views/components/left_sidebar.php' ?>
    <!-- left sidebar end -->
    <!----- awal area link internal ----->
    <?php 
    if($hal == 'home'){
      include_once 'views/home.php';
    }
    if (!empty($hal)) {
        include_once 'views/'.$hal.'.php';
    } else {
        include_once 'views/home.php';
    }
    ?>
    <!----- akhir area link internal ----->
    </div>
    <!-- main end -->

    <!-- footer start -->
    <?php include_once 'views/components/footer.php' ?>
    <!-- footer end -->

  </div>
  <!-- container-scroller -->
    
  <!-- Js Plugins  -->
  <?php include_once 'plugins/js/js_plugins.php' ?>
</body>

</html>

