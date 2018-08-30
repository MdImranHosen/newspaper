<?php
$meta_ti = new Meta_title();
define("DESCRIPTIONS", "PDL news in bangla, pdlnews");
define("KEYWORD", "pdlnews, bangla news, current News, bangla newspaper");
define("KEYWORDSS", "pdlnews, bangla news, bangladeshi newspaper, bd news paper, news paper, daily newspaper, bangladeshi news paper, bangla paper, all bangla newspaper, bangladesh news, daily newspaper, অনলাইন, পত্রিকা, বাংলাদেশ");
?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
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
  $getNewsId = $meta_ti->getMetaTagsDetails($detaisId);
  if ($getNewsId) {
  	while ($getMetaTags = $getNewsId->fetch_assoc()) { ?>

<meta name="description" content="<?php echo $getMetaTags['newsTitle']; ?> - <?php echo DESCRIPTIONS; ?>" />
<meta name="keywords" content="<?php echo $getMetaTags['newsTitle']; ?> <?php echo KEYWORD; ?>" />
<meta name="author" content="<?php 
if (!$getMetaTags['author'] == '') {
   echo $getMetaTags['author'];
 }else{
    echo 'নিজস্ব প্রতিবেদক';
 }
 ?>" />
 <!-- fb type meta -->
<meta property="og:type" content="article" /> 
<meta property="og:image" content="<?php echo BASE_PATH; ?><?php echo $getMetaTags['newsImage']; ?>" />
<meta property="og:title" content="<?php echo $getMetaTags['newsTitle']; ?>" /> <meta property="og:url" content="<?php echo BASE_PATH; ?>news_details.php?news-details=<?php echo $getMetaTags['id']; ?>" />
<meta property="og:description" content="<?php echo $fm->textShorten($getMetaTags['details_news']); ?>"/>

<?php } } }else{ ?>
<meta name="description" content="<?php echo DESCRIPTIONS; ?>">
<meta name="keywords" content="<?php echo KEYWORDSS; ?>">
<meta name="author" content="pdlnews" >
<?php } ?>