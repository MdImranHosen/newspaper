<?php
$meta_ti = new Meta_title();
define("DESCRIPTIONS", "PDL news in bangla, pdlnews");
define("KEYWORD", "pdlnews, bangla news, current News, bangla newspaper");
define("KEYWORDSS", "pdlnews, bangla news, current News, bangla newspaper, bangladesh newspaper, online paper, detective news, bangladeshi newspaper, crime news,  bangla news paper, bangladesh newspapers, newspaper, all bangla news paper, bd news paper, news paper, bangladesh news paper, daily, bangla newspaper, daily newspaper, bangladeshi news paper, bangla paper, all bangla newspaper, bangladesh news, daily newspaper, অনলাইন, পত্রিকা, বাংলাদেশ, আজকের পত্রিকা, আন্তর্জাতিক, অর্থনীতি, খেলা,বিনোদন, ফিচার, বিজ্ঞান ও প্রযুক্তি, চলচ্চিত্র, ঢালিউড, বলিউড, হলিউড, মঞ্চ, টেলিভিশন, নকশা,  ছুটির দিনে, অধুনা, স্বপ্ন নিয়ে, আনন্দ, সাহিত্য,কম্পিউটার, মোবাইল ফোন, অটোমোবাইল, মহাকাশ, গেমস, মাল্টিমিডিয়া, রাজনীতি, সরকার, অপরাধ, আইন ও বিচার, পরিবেশ, দুর্ঘটনা, সংসদ, রাজধানী, শেয়ার বাজার, বাণিজ্য, পোশাক শিল্প, ক্রিকেট, ফুটবল, লাইভ স্কোর ");
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

<meta name="description" content="<?php echo $getMetaTags['newsTitle']; ?> - <?php echo DESCRIPTIONS; ?>">
<meta name="keywords" content="<?php echo $getMetaTags['newsTitle']; ?> <?php echo KEYWORD; ?>">
<meta name="author" content="<?php 
if (!$getMetaTags['author'] == '') {
   echo $getMetaTags['author'];
 }else{
    echo 'নিজস্ব প্রতিবেদক';
 }
 ?>">
 <!-- fb type meta -->
<meta property="og:type"   content="article" /> 
<meta property="og:title"  content="<?php echo $getMetaTags['newsTitle']; ?>" /> 
<meta property="og:description" content="<?php echo $fm->textShorten($getMetaTags['details_news']); ?>"/>

<?php } } }else{ ?>
<meta name="description" content="<?php echo DESCRIPTIONS; ?>">
<meta name="keywords" content="<?php echo KEYWORDSS; ?>">
<meta name="author" content="pdlnews" >
<?php }?>