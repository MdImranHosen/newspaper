 <footer class="main-footer">
    <!-- Footer pdl007.com Start -->
      <div class="row">
        
        <section class="col-lg-6 col-md-4">
         <div class="footer_aboutus">
          <h3>ABOUT US</h3>
          <hr>
        <?php
         $getSiteAddress = $about_address->getSiteAboutAddressByIdShow();
         if ($getSiteAddress) {
           while ($result = $getSiteAddress->fetch_assoc()) {
        ?>
          <?php echo $result['s_about']; ?>
          <?php } } ?>
         </div>
        </section>
        <section class="col-lg-3 col-md-4">
          <h3>SERVICES</h3>
          <table class="table table-border table-hover footer_services">
            <tbody>
              <tr>
                <td><i class="far fa-newspaper"></i></td>
                <td><a href="<?php echo BASE_PATH; ?>">PDL News</a></td>
              </tr>
              <tr>
                <td><i class="fas fa-broadcast-tower"></i></td>
                <td><a href="#">Bangla Radio</a></td>
              </tr>
              <tr>
                <td><i class="fas fa-tv"></i></td>
                <td><a href="#">Bangla Television</a></td>
              </tr>
              <tr>
                <td><i class="fa fa-wrench"></i></td>
                <td><a href="#">About Us</a></td>
              </tr>
              <tr>
                <td><i class="fa fa-phone"></i></td>
                <td><a href="<?php echo BASE_PATH; ?>contact.php">Contact Us</a></td>
              </tr>
            </tbody>
          </table>
        </section>
        <section class="col-lg-3 col-md-4">
          <h3>CONTACT & ADDRESS</h3>
          <hr>
          <?php
         $getSiteAddress = $about_address->getSiteAboutAddressByIdShow();
         if ($getSiteAddress) {
           while ($result = $getSiteAddress->fetch_assoc()) {
        ?>
            <address class="footer_address"><i class="fa fa-map-marker" style="font-size:30px;color:red"></i> <?php echo $result['s_ads']; ?> </address>
            <hr>
            <table class="table table-border table-hover">
              <tbody>
                <tr>
                  <td><i class="fa fa-mobile fa-lg"></i></td>
                  <td><?php echo $result['s_phone']; ?></td>
                </tr>
                <tr>
                  <td><i class="fa fa-envelope" aria-hidden="true"></i></td>
                  <td><?php echo $result['s_email']; ?></td>
                </tr>
                <tr>
                  <td><i class="fas fa-globe"></i></td>
                  <td><a href="<?php echo $result['ws_u']; ?>" target="_blank"> <?php echo $result['ws_u']; ?></a></td>
                </tr>
              </tbody>
            </table>
            <?php } } ?>
         </section>
        
      <section class="col-lg-8 col-lg-offset-4">
        <div class="socall_media">
          <ul>
            <?php
             $getSocailm = $socail->getSocailMediaByIdShow();
             if ($getSocailm) {
             while ($result = $getSocailm->fetch_assoc()) {
             ?>
            <li><a target="_blank" href="<?php echo $result['bn_ns_fb']; ?>" class="site_media md-fb fab fa-facebook-f"></a></li>
            <li><a target="_blank" href="<?php echo $result['bn_ns_tw']; ?>" class="site_media md-tw fab fa-twitter"></a></li>
            <li><a target="_blank" href="<?php echo $result['bn_ns_gp']; ?>" class="site_media md-gp fab fa-google-plus-g"></a></li>
            <li><a target="_blank" href="<?php echo $result['bn_ns_lk']; ?>" class="site_media md-lk fab fa-linkedin-in"></a></li>
            <li><a target="_blank" href="<?php echo $result['bn_ns_ig']; ?>" class="site_media md-ig fab fa-instagram"></a></li>
            <li><a target="_blank" href="<?php echo $result['bn_ns_ps']; ?>" class="site_media md-pr fab fa-pinterest-p"></a></li>
            <li><a target="_blank" href="<?php echo $result['bn_ns_yt']; ?>" class="site_media md-yt fab fa-youtube"></a></li>
            <?php } } ?>
          </ul>
        </div>
       
      </section>
      </div>
  <!-- End Footer -->
  <hr>
  <?php
   $getSiteetc = $site_etc->getSiteEtcByIdShow();
   if ($getSiteetc) {
     while ($result = $getSiteetc->fetch_assoc()) {
  ?> 
    <div class="pull-right hidden-xs developer_name_style">
      <b>Develop by </b> <a href="<?php echo $result['developer_surl']; ?>" target="_blank"><?php echo $result['developer_name']; ?></a>
    </div>
    <strong>Copyright &copy; <?php echo date("Y"); ?> <a target="_blank" href="<?php echo $result['copyright_surl']; ?>"><?php echo $result['copyright_text']; ?></a>.</strong> All rights
    reserved.
  <?php } } ?>
  </footer>
</div>
<script src="<?php echo BASE_PATH; ?>assets/js/jquery.min.js"></script> 
<script src="<?php echo BASE_PATH; ?>assets/js/wow.min.js"></script> 
<script src="<?php echo BASE_PATH; ?>assets/js/bootstrap.min.js"></script> 
<script src="<?php echo BASE_PATH; ?>assets/js/slick.min.js"></script> 
<script src="<?php echo BASE_PATH; ?>assets/js/jquery.li-scroller.1.0.js"></script> 
<script src="<?php echo BASE_PATH; ?>assets/js/jquery.newsTicker.min.js"></script> 
<script src="<?php echo BASE_PATH; ?>assets/js/jquery.fancybox.pack.js"></script> 
<script src="<?php echo BASE_PATH; ?>assets/js/custom.js"></script>
<script src="<?php echo BASE_PATH; ?>js/menu_script.js"></script>
<!--Menu script End-->
<!-- Comment this site With diqus.com -->
<script id="dsq-count-scr" src="//all-bangla-news.disqus.com/count.js" async></script>
</body>
</html>