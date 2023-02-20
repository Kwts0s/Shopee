<?php 
 ob_start();
 //include header
 include('header.php');
?>

    <?php
                        // Include //
    
    // cart
    count($product->getData('cart'))?include('Template/_cart-temp.php'):include('Template/notFound/_cart_notFound.php');
    

    // wishlist
    count($product->getData('wishlist'))?include('Template/_wishlist_template.php'):include('Template/notFound/_wishlist_notFound.php');
    
    
    // new phones
    include('Template/_new-phones.php');

    ?>


<?php
    // footer
    include('footer.php');
  ?>