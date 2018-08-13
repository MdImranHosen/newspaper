<?php include "inc/header.php" ?>
<?php
   $cId = preg_replace('/\D/', '', $_GET['artical']);
   $cId = mysqli_real_escape_string($db->link, $cId);
   $cId = htmlentities($cId);

 if (!isset($cId) || $cId == NULL) {
       header('Location:404.php');
  }elseif($cId==0){
    header('Location:404.php');
  }else{
   $cId = (int)$cId;
  }
?>
<?php include "inc/header-top.php" ?>
<?php include "inc/news_mq_s.php" ?>
<?php include "inc/menu.php" ?>

 <section id="contentSection">
  <div class="row">
      <!-- <div class="col-lg-12 col-md-12 col-sm-12"> -->
<!-- -->
  <div class="fashion_technology_area">
           <!-- News Category -->
           <?php
             $getCatId = $show->getCategoryWishId($cId);
             if ($getCatId) {
               while ($result = $getCatId->fetch_assoc()) {
           ?>
           <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
            <div style="padding-bottom: 15px;padding-top: 15px;margin-bottom: 10px;margin-top: 10px;clear: both;">
            <div class="fashion news_category_post">
              <div class="single_post_content">
                <ul class="business_catgnav wow fadeInDown">
                  <li>
                    <figure class="bsbig_fig margirn_style_newsCat"><a href="news_details.php?news-details=<?php echo $result['id']; ?>" class="featured_img"> <img alt="" src="<?php echo $result['newsImage']; ?>"> <span class="overlay"></span> </a>
                      <figcaption> <a href="news_details.php?news-details=<?php echo $result['id']; ?>"><?php echo $result['newsTitle']; ?></a> </figcaption>
                      <a href="news_details.php?news-details=<?php echo $result['id']; ?>"><?php echo $fm->textShorten($result['details_news']); ?></a>
                    </figure>
                 
                    <div class="time_item_author" unselectable="on"
                        onselectstart="return false;" 
                        onmousedown="return false;">
                      <!-- //Date and Time of News Post.. -->
                    <i class="fa fa-clock-o" aria-hidden="true"></i>
                     <time><?php
                      if (!$result['c_date'] == '') {
                        echo $result['c_date'];
                      }else{
                        date_default_timezone_set('Asia/Dhaka');
                        echo date('d-F-Y');
                      }
                      
                       ?></time>
                     <!-- //Date and Time of News Post End.. -->
                     <!--Author-->
                     <span> | <i class="fa fa-pencil" aria-hidden="true"></i><?php 
                       if (!$result['author'] == '') {
                         echo $result['author'];
                       }else{
                        echo "নিজস্ব প্রতিবেদক";
                       }
                      ?></span>
                     <!-- Author-->
                   </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <?php } } ?>
          <!-- News Category End -->
      </div>
<!--  -->
 <!--  </div> -->
</div>
  </section>

<?php include 'inc/footer.php'; ?>