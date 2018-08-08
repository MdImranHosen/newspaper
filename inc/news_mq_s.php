  <!--Least News and sosal midia Start-->
  <?php
  $so = new Socail();
  ?>
 <section id="newsSection">
    <div class="row">
      <!-- <div class="col-lg-12 col-md-12"> -->
        <div class="latest_newsarea">
        <div class="col-lg-10 col-sm-12">
         <span>শিরোনাম</span>
          <ul id="ticker01" class="news_sticker">
            <?php
                 $getMqNews = $show->getMqNewsList();
                 if ($getMqNews) {
                   while ($getMqNewsResult = $getMqNews->fetch_assoc()) {
            ?>
            <li><a href="news_details.php?news-details=<?php echo $getMqNewsResult['id']; ?>"><img src="<?php echo $getMqNewsResult['newsImage']; ?>" alt=""><?php echo $fm->textMqShorten($getMqNewsResult['newsTitle']); ?></a></li>
           <?php } } ?>
          </ul>
          </div>
          <div class="col-lg-2">
          <div class="social_area">
             <?php
                $socail_m = $so->socail_view();
                if ($socail_m) {
                  while ($socail_result = $socail_m->fetch_assoc()) {
             ?>
            <ul class="social_nav">
              <li class="facebook"><a target="_blank" href="<?php echo $socail_result['pdl_fb']; ?>"></a></li>
              <li class="twitter"><a target="_blank" href="<?php echo $socail_result['pdl_tw']; ?>"></a></li>
              <li class="googleplus"><a target="_blank" href="<?php echo $socail_result['pdl_gp']; ?>"></a></li>
              <li class="youtube"><a target="_blank" href="<?php echo $socail_result['pdl_yt']; ?>"></a></li>
             <li class="pinterest"><a target="_blank" href="<?php echo $socail_result['pdl_ps']; ?>"></a></li>
            </ul>
            <?php } } ?>
          </div>
         </div>
        </div>
        <!-- Start socal Media Menu Small-->
        <div class="col-lg-12">
          <div class="social_area_sm">
            <?php
                $socail_m = $so->socail_view();
                if ($socail_m) {
                  while ($socail_result = $socail_m->fetch_assoc()) {
             ?>
            <ul class="social_nav">
              <li class="facebook"><a target="_blank" href="<?php echo $socail_result['pdl_fb']; ?>"></a></li>
              <li class="twitter"><a target="_blank" href="<?php echo $socail_result['pdl_tw']; ?>"></a></li>
              <li class="googleplus"><a target="_blank" href="<?php echo $socail_result['pdl_gp']; ?>"></a></li>
              <li class="youtube"><a target="_blank" href="<?php echo $socail_result['pdl_yt']; ?>"></a></li>
              <li class="pinterest"><a target="_blank" href="<?php echo $socail_result['pdl_ps']; ?>"></a></li>
            </ul>
            <?php } } ?>
          </div> 
        </div>
        <!--End Socal Media Menu Small-->


      <!-- </div> -->
    </div>
  </section>
  <!--Least News and sosal midia End-->