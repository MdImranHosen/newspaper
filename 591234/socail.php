<?php include "inc/header.php"; ?>
<?php if (!Session::get('level') == '0') {
  header("Location:index.php");
} ?>
<?php
include "../classes/Socail.php";
$so = new Socail();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
     $getSocail_media = $so->getSocail_meia_Site($_POST);
}

?>
<link rel="stylesheet" type="text/css" href="css/normalize.css" />
<link rel="stylesheet" type="text/css" href="css/demo.css" />
<link rel="stylesheet" type="text/css" href="css/component.css" />
<script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>
<style type="text/css">
  .socail_media_image_top{
    padding: 0px;
    background-image: url('upload/socail/ss.jpg');
    background-repeat: no-repeat;
    background-position: center;
    background-color: #b8b4a9;

  }
  .box-footer {
  border-top: 0px solid #f4f4f4;
  background-color: transparent;
  padding: 0px;
}
 .form-group {
  border: 2px solid #666259;
}
 .form-control{
   background-color: #000;
   opacity: 0.8;
   color: #fff;
   font-weight: bold;
 }
 .box.box-info {
  border-top-color: #9A9A9A;
}
</style>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include "inc/header_bottom.php"; ?>
  <!-- Left side column. contains the logo and sidebar -->
<!--SideBar Start-->
  <?php include "inc/sidebar.php"; ?>
<!--SideBar End-->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Socail
        <small>Media</small><br>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Socail Media</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <section class="col-lg-8 connectedSortable">
          <?php
            if (isset($getSocail_media)) {
              echo $getSocail_media;
              echo '<script>
                    setTimeout(function () {
                      window.location.href="socail.php";
                    }, 2000); 
                   </script>';
            }
          ?>
          <div class="box box-info socail_media_image_top">
            <div class="box-header">
              <!-- <i class="fa fa-plus"></i>
              <h3 class="box-title text-success">Socail Media</h3> -->
              <img src="upload/socail/social_media.png" width="80%" height="auto">
            </div>
           <?php
               $socail_view = $so->socail_view();
               if ($socail_view) {
                 while ($result = $socail_view->fetch_assoc()) {
           ?>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <div class="box-body">
               <input type="hidden" name="so_id" value="<?php echo $result['social_Id']; ?>">
               <div class="form-group">
                 <input type="text" class="form-control" name="pdl_fb" value="<?php echo $result['pdl_fb']; ?>">
                </div>
                <div class="form-group">
                 <input type="text" class="form-control" name="pdl_tw" value="<?php echo $result['pdl_tw']; ?>">
                </div>
                <div class="form-group">
                 <input type="text" class="form-control" name="pdl_gp" value="<?php echo $result['pdl_gp']; ?>">
                </div>
                <div class="form-group">
                 <input type="text" class="form-control" name="pdl_yt" value="<?php echo $result['pdl_yt']; ?>">
                </div>
                <div class="form-group">
                 <input type="text" class="form-control" name="pdl_ps" value="<?php echo $result['pdl_ps']; ?>">
                </div>
            <div class="box-footer">
              <button type="submit" name="update" class="pull-center btn btn-success">Update</button>
            </div>
          </div>
           </form>
           <?php  } } ?>
          </div>
        </section>
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<script src="js/custom-file-input.js"></script>
<?php include "inc/footer.php"; ?>
