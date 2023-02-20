<?php 
  ob_start();
 //include header
 include('header.php');
?>
    <?php
                        // Include //

    //banner area
    include('Template/_banner-area.php');
    
    // top sale
    include('Template/_top-sale.php');

    // special price
    include('Template/_special-price.php');

    // banner ads
    include('Template/_banner-ads.php');

    // new phones
    include('Template/_new-phones.php');

    // blogs
    include('Template/_blogs.php');


    ?>

  <?php
    // footer
    include('footer.php');
  ?>