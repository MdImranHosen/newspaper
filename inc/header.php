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
<link rel="icon" href="images/icon.png">
<!-- Start style link Menu -->
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700|Droid+Serif:400,700|Doid+Sans+Mono' rel='stylesheet' type='text/css'><link href='https://fonts.googleapis.com/css?family=PT+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'><link href='https://fonts.googleapis.com/css?family=PT+Sans:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  
<link rel="stylesheet" type="text/css" href="css/menu_style.css">
<!-- End style link Menu -->

<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
<link rel="stylesheet" type="text/css" href="assets/css/font.css">
<link rel="stylesheet" type="text/css" href="assets/css/li-scroller.css">
<link rel="stylesheet" type="text/css" href="assets/css/slick.css">
<link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.css">
<link rel="stylesheet" type="text/css" href="assets/css/theme.css">
<link rel="stylesheet" type="text/css" href="assets/css/style.css">
<link rel="stylesheet" type="text/css" href="css/social.css">
<!-- Home page Style -->
<link rel="stylesheet" type="text/css" href="css/page_text_style.css">
<!-- New Style 19-03-2018 -->
<link rel="stylesheet" type="text/css" href="css/style_new.css">
</head>
<body>