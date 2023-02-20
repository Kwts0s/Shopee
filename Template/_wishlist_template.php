<!-- Shopping Cart Section -->
<?php 
  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if (isset($_POST['delete-cart-submit'])){
      $deletedrecord = $Cart->deleteCart($_POST['item_id']);
    }

    if(isset($_POST['cart-submit'])){
      $Cart->saveForLater($_POST['item_id'],'cart','wishlist');
    }
  }
?>
<section id="cart" class="py-4 mb-5">
      <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20">Wishlist</h5>

        <!-- shopping cart items -->
        <div class="row">
          <div class="col-sm-9">
            <?php 
              
              foreach($product->getData('wishlist') as $item):
                $cart = $product->getProduct($item['item_id']);
                $subTotal[] = array_map(function($item){
                
            ?>
            <!-- cart item -->
            
            <div class="row border-top py-3 mt-3">
              <div class="col-sm-2">
              <a href="<?php printf('%s?item_id=%s','product.php',$item['item_id']); ?>"><img src="<?= $item['item_image'] ?>" style="width:150px;" alt="cart1" class="img-fluid"></a>
              </div>
              <div class="col-sm-8">
                <h5 class="font-baloo font-size-20"><?= $item['item_name'] ?></h5>
                <small><?= $item['item_brand'] ?></small>
                <!-- product rating-->
                <div class="d-flex">
                  <div class="rating text-warning font-size-12">
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="fas fa-star"></i></span>
                    <span><i class="far fa-star"></i></span>
                  </div>
                  <a href="#" class="px-2 font-rale font-size-14">475 ratings</a>
                </div>
                <!-- !product rating-->

                <!-- product qty -->
                <div class="qty d-flex pt-2">
                  

                  <form method="post">
                    <input type="hidden" value="<?= $item['item_id'] ?>" name="item_id">
                    <button type="submit" name="delete-cart-submit" class="btn font-baloo text-danger pl-0 pr-3 mt-3 border-right">Delete</button>
                  </form>

                  <form method="post">
                    <input type="hidden" value="<?= $item['item_id'] ?>" name="item_id">
                    <button type="submit" name="cart-submit" class="btn font-baloo text-danger mt-3">Add to Cart</button>
                  </form>
                  
                  
                </div>
                <!-- !product qty -->

              </div>

              <div class="col-sm-2 text-right">
                <div class="font-size-20 text-danger font-baloo">
                  $<span class="product_price" data-id="<?=$item['item_id']??'0'; ?>"><?= $item['item_price'] ?></span>
                </div>
              </div>
            </div>
            <!-- !cart item -->
            <?php 
              return $item['item_price'];
              },$cart); //closing array map function 
              
              endforeach;
            ?>
          </div>

          

        </div>
        <!-- !shopping cart items -->
      </div>
    </section>
    <!-- !Shopping Cart Section -->