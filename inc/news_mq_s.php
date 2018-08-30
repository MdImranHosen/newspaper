 <section id="newsSection">
    <div class="row">
      <!-- <div class="col-lg-12 col-md-12"> -->
        <div class="latest_newsarea"  style="z-index: 1">
        <div class="col-lg-10 col-sm-12">
         <span>শিরোনাম</span>
          <ul id="ticker01" class="news_sticker" style="max-height: 30px;overflow: hidden;">
            <?php
                 $getMqNews = $show->getMqNewsList();
                 if ($getMqNews) {
                   while ($getMqNewsResult = $getMqNews->fetch_assoc()) {
            ?>
            <li><a href="<?php echo BASE_PATH; ?>news_details.php?news-details=<?php echo $getMqNewsResult['id']; ?>"><img src="<?php echo BASE_PATH; ?><?php echo $getMqNewsResult['newsImage']; ?>" alt="" style="max-width: 27px;max-height: 27px;"><?php echo $fm->textMqShorten($getMqNewsResult['newsTitle']); ?></a></li>
           <?php } } ?>
          </ul>
          </div>
          <div class="col-lg-2">
          <div class="social_area">
             <?php
                $getSocailm = $socail->getSocailMediaByIdShow();
                 if ($getSocailm) {
                 while ($socail_result = $getSocailm->fetch_assoc()) {
             ?>
            <ul class="social_nav">
              <li class="facebook"><a target="_blank" href="<?php echo $socail_result['bn_ns_fb']; ?>"></a></li>
              <li class="twitter"><a target="_blank" href="<?php echo $socail_result['bn_ns_tw']; ?>"></a></li>
              <li class="googleplus"><a target="_blank" href="<?php echo $socail_result['bn_ns_gp']; ?>"></a></li>
              <li class="youtube"><a target="_blank" href="<?php echo $socail_result['bn_ns_yt']; ?>"></a></li>
             <li class="pinterest"><a target="_blank" href="<?php echo $socail_result['bn_ns_ps']; ?>"></a></li>
            </ul>
            <?php } } ?>
          </div>
         </div>
        </div>
        <!-- Start socal Media Menu Small-->
        <div class="col-lg-12"  style="z-index: 1">
          <div class="social_area_sm">
            <?php
                $getSocailm = $socail->getSocailMediaByIdShow();
                 if ($getSocailm) {
                 while ($socail_result = $getSocailm->fetch_assoc()) {
             ?>
            <ul class="social_nav">
              <li class="facebook"><a target="_blank" href="<?php echo $socail_result['bn_ns_fb']; ?>"></a></li>
              <li class="twitter"><a target="_blank" href="<?php echo $socail_result['bn_ns_tw']; ?>"></a></li>
              <li class="googleplus"><a target="_blank" href="<?php echo $socail_result['bn_ns_gp']; ?>"></a></li>
              <li class="youtube"><a target="_blank" href="<?php echo $socail_result['bn_ns_yt']; ?>"></a></li>
              <li class="pinterest"><a target="_blank" href="<?php echo $socail_result['bn_ns_ps']; ?>"></a></li>
            </ul>
            <?php } } ?>
          </div> 
        </div>
        <!--End Socal Media Menu Small-->


      <!-- </div> -->
    </div>
  </section>
  <!--Least News and sosal midia End-->