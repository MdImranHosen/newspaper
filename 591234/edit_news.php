<?php include "inc/header.php"; ?>
<?php if (!Session::get('level') == '0') {
  header("Location:index.php");
} 
 //News Post page News Edit id catch...
 if (!isset($_GET['edit_news_Id']) || $_GET['edit_news_Id'] == NULL) {
      header("Location:post_list.php");
 } else{
    $id = preg_replace('/[^-a-zA-Z0-9_]/', '', $_GET['edit_news_Id']);
    $id = (int)$id;
 }

//post news edit get query...
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
    
    $getNewsPostEditMsg = $post->getNewsPostUpdate($_POST, $_FILES, $id);
}

?>

<link rel="stylesheet" type="text/css" href="css/normalize.css" />
<link rel="stylesheet" type="text/css" href="css/demo.css" />
<link rel="stylesheet" type="text/css" href="css/component.css" />
<script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>
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
        <i class="fa fa-edit"></i> Edit News
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="post_list.php" title="All News List."><i class="fa fa-list"></i>All News List</a></li>
        <li class="active"></li>
      </ol>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <?php
           if (isset($getNewsPostEditMsg)) {
             echo $getNewsPostEditMsg;
             echo "<script>
               setTimeout(function () {
                   window.location.href= 'post_list.php'; 

                },2000);
            </script>";
           }
        ?>
        <section class="col-md-12 connectedSortable">
          <div class="box box-info">
          <div class="box-header">
              <h3 class="box-title"><i class="fa fa-edit"></i> Update News </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-info" onclick="post_list();">
                <i class="fa fa-eye"></i>
                 View LIst
               </button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
          <?php 
                $getNewsResult = $post->getNewsResultall($id);

                if ($getNewsResult) {
                  while ($result = $getNewsResult->fetch_assoc()) {
          
          ?>
          <div class="box-body pad">
          <form action="" method="post" enctype="multipart/form-data">
             <div class="form-group">
              <input type="text" class="form-control" name="editnewsTitle" id="formGroupExampleInput" aria-describedby="newsTitle" value="<?php echo $result['newsTitle']; ?>">
            </div>
            <div class="form-group">
                  <select class="form-control selectedStyle" name="editCatId">
                    <option value="" style="display: none" selected hidden>Select Category</option>
                    <?php
                       $catResult = $cat->getCategoryData();
                       if ($catResult) {
                        while ($values = $catResult->fetch_assoc()) {
                      ?>
                    <option <?php if ($result['catId'] == $values['catId']){ ?> selected="selected" <?php } ?> value="<?php echo $values['catId']; ?>"><?php echo $values['category']; ?></option>
                    <?php } } ?>
                 </select>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="author" aria-describedby="author" value="<?php echo $result['author']; ?>">
            </div>
            <div class="form-group">
              <img src="../<?php echo $result['newsImage']; ?>" alt="Image" width='220px' height='180px'>
              <br><br/>
              <input type="file" name="editnewsImage" id="file-7" class="inputfile inputfile-6" data-multiple-caption="{count} files selected" multiple />
                  <label for="file-7"><span></span> <strong><svg  width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> Choose image &hellip;</strong></label>
           </div>
          <!-- /.form group -->
           <div class="form-group">
                 <textarea id="editor1" name="edit_details_news" rows="10" cols="80">
                  <?php echo $result['details_news']; ?></textarea>
           </div>
           <div class="form-group">
              <input type="hidden" name="edit_optradio" value="0">
              <label class="radio-inline"><input type="radio" name="edit_optradio" value="1" <?php if ($result["optradio"] == '1') echo 'checked="checked"'; ?>" /> সাধারণ সংবাদ</label>
              <label class="radio-inline"><input type="radio" name="edit_optradio" value="2" <?php if ($result["optradio"] == '2') echo 'checked="checked"'; ?>" /> গুরুত্বপূর্ণ সংবাদ</label>
            </div>
            <button type="button" class="btn btn-primary" onclick="history.go(-1);"><img src="upload/back/back.png" width="40px" height="20px"></button>
            <button type="submit" name="update" class="btn btn-primary"><i class="fa fa-upload" aria-hidden="true"></i> Update</button>
          </form>
         </div>
          <?php } } ?>
      </div>
       </section>
      <!-- /.row (main row) -->

    </section>
    <!-- /.content -->
  </div>

  <!-- /.content-wrapper -->
<script src="js/custom-file-input.js"></script>
<?php include "inc/footer.php"; ?>
