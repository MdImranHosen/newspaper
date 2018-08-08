<?php include "inc/header.php" ?>
<?php include "inc/header-top.php" ?>
<?php include "inc/news_mq_s.php" ?>
<?php include "inc/menu.php" ?>
  
  <section id="contentSection">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-8">
        <div class="left_content">
          <div class="error_page">
            <h3>We Are Sorry</h3>
            <h1>404</h1>
            <p>Unfortunately, the page you were looking for could not be found. It may be temporarily unavailable, moved or no longer exists</p>
            <span></span> <a href="index.php" class="wow fadeInLeftBig">Go to home page</a> </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <aside class="right_content">
          <div class="single_sidebar">
            <h2><span>Popular Post</span></h2>
            <ul class="spost_nav">
             <?php
                 $getMqNews = $show->getMqNewsList();
                 if ($getMqNews) {
                   while ($getMqNewsResult = $getMqNews->fetch_assoc()) {
                ?>
              <li>
                <div class="media wow fadeInDown"> <a href="news_details.php?news-details=<?php echo $getMqNewsResult['id']; ?>" class="media-left"> <img alt="" src="<?php echo $getMqNewsResult['newsImage']; ?>"> </a>
                  <div class="media-body"> <a href="news_details.php?news-details=<?php echo $getMqNewsResult['id']; ?>" class="catg_title"> <?php echo $getMqNewsResult['newsTitle']; ?></a> </div>
                </div>
              </li>
               <?php } } ?>
            </ul>
          </div>
        </aside>
      </div>
    </div>
  </section>

<?php include 'inc/footer.php'; ?>