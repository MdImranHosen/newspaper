<?php
$cat = new Category();
?>
  <section id="navArea">
    <nav class="navbar navbar-inverse" role="navigation"  style="z-index: 1">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav main_nav">
          <li class="active"><a href="index.php"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Home</span></a></li>
          <?php
             $getMenu = $cat->getCategoryData();
             if ($getMenu) {
               while ($result = $getMenu->fetch_assoc()) {
          ?>
          <li><a href="news.php?artical=<?php echo $result['catId']; ?>"><?php echo $result['category']; ?></a></li>
         <?php
            }
             }
         ?>
        </ul>
      </div>
    </nav>
  </section>