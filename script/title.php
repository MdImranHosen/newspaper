<?php
$meta_ti = new Meta_title();
define("TITLE", "PDL News in Bangladesh");
if (isset($_GET['news-details'])) {
   $detaisId = preg_replace('/\D/', '', $_GET['news-details']);
   $detaisId = mysqli_real_escape_string($db->link, $detaisId);
   $detaisId = htmlentities($detaisId);

 if (!isset($detaisId) || $detaisId == NULL) {
       header('Location:404.php');
  }elseif($detaisId==0){
    header('Location:404.php');
  }else{
   $detaisId = (int)$detaisId;
  }
  $getNewsId = $meta_ti->getTitleNewsDetails($detaisId);
  if ($getNewsId) {
  	while ($getNewsdResult = $getNewsId->fetch_assoc()) { ?>
  		<title><?php echo $getNewsdResult['newsTitle']; ?></title>
 <?php 	} } }elseif(isset($_GET['artical'])){
   $catId = preg_replace('/\D/', '', $_GET['artical']);
   $catId = mysqli_real_escape_string($db->link, $catId);
   $catId = htmlentities($catId);

 if (!isset($catId) || $catId == NULL) {
       header('Location:404.php');
  }elseif($catId==0){
    header('Location:404.php');
  }else{
   $catId = (int)$catId;
  }
  $getNewsCatId = $meta_ti->getCategoryNews($catId);
  if ($getNewsCatId) {
  	while ($getCatNewsdResult = $getNewsCatId->fetch_assoc()) { ?>
  		<title><?php echo $getCatNewsdResult['category']; ?> - <?php echo TITLE; ?></title>
<?php } } }else{ ?>
      <title><?php $fm->title(); ?></title>
<?php } ?>