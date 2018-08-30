<?php 
include 'lib/Session.php'; 
Session::init();
include 'classes/Show_news.php';
include "classes/Populer_newsPaper.php";
include 'classes/Category.php';
include 'classes/Meta_title.php';
include 'classes/Socail.php';
include "classes/Site_etc.php";
include "classes/About_address.php";

 $fm = new Format();
 $db = new Database();
 $show = new Show_news();
 $populer_news = new Populer_newsPaper();
 $socail = new Socail();
 $site_etc = new Site_etc();
 $about_address = new About_address();

define('BASE_PATH', 'http://localhost/pdlnews/');
 //Cache Remove Code Start....
header("Cache-Control: no-store, no-cache, must-revalidate"); 
header("Cache-Control: pre-check=0, post-check=0, max-age=0"); 
header("Pragma: no-cache"); 
header("Expires: Mon, 6 Dec 1977 00:00:00 GMT"); 
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
//Cache Remove Code End....
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<?php include 'script/title.php'; ?>
<?php include 'script/meta.php'; ?>
<!--Pdl Icon -->
<link rel="icon" href="<?php echo BASE_PATH; ?>images/icon.png">
<!-- Start style link Menu -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700|Droid+Serif:400,700|Doid+Sans+Mono' rel='stylesheet' type='text/css'><link href='https://fonts.googleapis.com/css?family=PT+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'><link href='https://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  
<link rel="stylesheet" type="text/css" href="<?php echo BASE_PATH; ?>css/menu_style.css">
<!-- End style link Menu -->

<link rel="stylesheet" type="text/css" href="<?php echo BASE_PATH; ?>assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo BASE_PATH; ?>fontawesome/css/all.css">
<link rel="stylesheet" type="text/css" href="<?php echo BASE_PATH; ?>assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="<?php echo BASE_PATH; ?>assets/css/font.css">
<link rel="stylesheet" type="text/css" href="<?php echo BASE_PATH; ?>assets/css/li-scroller.css">
<link rel="stylesheet" type="text/css" href="<?php echo BASE_PATH; ?>assets/css/slick.css">
<link rel="stylesheet" type="text/css" href="<?php echo BASE_PATH; ?>assets/css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="<?php echo BASE_PATH; ?>assets/css/theme.css">
<link rel="stylesheet" type="text/css" href="<?php echo BASE_PATH; ?>assets/css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo BASE_PATH; ?>css/social.css">
<!-- Home page Style -->
<link rel="stylesheet" type="text/css" href="<?php echo BASE_PATH; ?>css/page_text_style.css">
<!-- New Style 19-03-2018 -->
<link rel="stylesheet" type="text/css" href="<?php echo BASE_PATH; ?>css/style_new.css">
<!-- Share Socail Midia -->
<script src="//platform-api.sharethis.com/js/sharethis.js#property=5b8392b7d09af600128a4d1b&product=inline-share-buttons"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-124254584-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-124254584-1');
</script>
</head>
<body>