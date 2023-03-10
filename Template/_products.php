<!-- Product -->
<?php
  $item_id = $_GET['item_id'];
  foreach($product->getData() as $item):
    if ($item['item_id'] == $item_id):
?>
<section id="product" class="py=3">
      <div class="container">
        <div class="row">
          <div class="col-sm-6">
            <img src="<?php echo $item['item_image'] ?>" alt="product" class="img-fluid">
            <div class="form-row pt-4 font-size-16 font-baloo">
              <div class="col">
                <button type="submit" class="btn btn-danger form-control">Purchase</button>
              </div>
              <div class="col">
                  <?php 
                  if(in_array($item['item_id'],$Cart->getCartId($product->getData('cart')) ?? [])){
                    echo '<button type="submit" disabled class="btn btn-success font-size-16 form-control">In the Cart</button>';
                  }else{
                    echo ' <button type="submit"  class="btn btn-warning font-size-16 form-control">Add to Cart</button>';
                  }
                  ?>
                
              </div>
            </div>
          </div>
          <div class="col-sm-6 px-4 py-5">
            <h5 class="font-baloo font-size-20"><?=$item['item_name'] ?></h5>
            <small><?=$item['item_brand'] ?></small>
            <div class="d-flex">
              <div class="rating text-warning font-size-12">
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="fas fa-star"></i></span>
                <span><i class="far fa-star"></i></span>
              </div>
              <a href="#" class="px-2 font-rale font-size-14">185 ratings</a>
            </div>
            <hr class="m-0">

            <!-- Product price-->
            <table class="my-3">
              <tr class="font-rale font-size-16">
                <td>M.R.P:</td>
                <td><strike>$162.00</strike></td>
              </tr>
              <tr class="font-rale font-size-16">
                <td>Deal Price:</td>
                <td class="font-size-20 text-danger">$<span><?=$item['item_price'] ?></span><small class="text-dark font-size-12">&nbsp;&nbsp;VAT included</small></td>
              </tr>
              <tr class="font-rale font-size-14">
                <td>You Save:</td>
                <td><span class="font-size-16 text-danger">$10.00</span></td>
              </tr>
            </table>
            <!-- !Product price-->

            <!-- Policy-->
            <div id="policy">
              <div class="d-flex">
                <div class="return text-center mr-5">
                  <div class="font-size-20 my-2 color-second">
                    <span class="fas fa-retweet border p-3 rounded-pill"></span>
                  </div>
                  <a href="#" class="font-rale font-size-12">10 Days <br> Replacement</a>
                </div>
                <div class="return text-center mr-5">
                  <div class="font-size-20 my-2 color-second">
                    <span class="fas fa-truck border p-3 rounded-pill"></span>
                  </div>
                  <a href="#" class="font-rale font-size-12">3-4 Day <br> Delivery</a>
                </div>
                <div class="return text-center mr-5">
                  <div class="font-size-20 my-2 color-second">
                    <span class="fas fa-check-double border p-3 rounded-pill"></span>
                  </div>
                  <a href="#" class="font-rale font-size-12">2 Years <br> Warranty</a>
                </div>
              </div>
            </div>
            <!-- !Policy-->
            <hr>
            <!-- Order Details-->
              <div id="order-details" class="font-rale d-flex flex-column text-dark">
                <small>Delivery by:18 May - 3 June</small>
                <small>Sold By <a href="#">KG Electronics</a> (4.5 out of 5 | 18,198 ratings)</small>
                <small><i class="fas fa-map-marker-alt color-primary"></i>&nbsp;&nbsp;Deliver to Customer - 16674</small>
              </div>
            <!-- !Order Details-->

            <!-- Info Details -->
            <div class="row">
              <div class="col-6">
                <!--  color-->
                <div class="color my-3">
                  <div class="d-flex justify-content-between">
                    <h6 class="font-baloo">Color</h6>
                  <div class="p-2 color-yellow-bg rounded-circle"><button class="btn font-size-14"></button></div>
                  <div class="p-2 color-primary-bg rounded-circle"><button class="btn font-size-14"></button></div>
                  <div class="p-2 color-second-bg rounded-circle"><button class="btn font-size-14"></button></div>
                  </div>
                </div>
                <!-- !color-->
                
                
              </div>
              <div class="col-6">
                <!-- Quantity -->
                <div class="qty d-flex">
                  <h6 class="font-baloo mt-3">Qty:</h6>
                  <div class="px-4 d-flex font-rale">
                    <button class="qty-up border bg-light mt-3" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                    <input data-id="pro1" type="text" class="qty_input border px-2 mt-3 w-50 bg-light text-center" disabled value="1" placeholder="1">
                    <button class="qty-down border bg-light mt-3" data-id="pro1"><i class="fas fa-angle-down"></i></button>
                  </div>
                </div>
                <!-- !Quantity -->

              </div>
            </div>
            
            <!-- !Info Details -->

            <!-- Size -->
            <div class="size my-3">
              <h6 class="font-baloo">Size:</h6>
              <div class="d-flex justify-content-between w-75">
                <div class="font-rubik border p-2">
                  <button class="btn p-0 font-size-14">4GB RAM</button>
                </div>
                <div class="font-rubik border p-2">
                  <button class="btn p-0 font-size-14">6GB RAM</button>
                </div>
                <div class="font-rubik border p-2">
                  <button class="btn p-0 font-size-14">8GB RAM</button>
                </div>
              </div>
            </div>
            <!-- !Size -->

          </div>
            <!-- Description -->
          <div class="col-12">
            <h6 class="font-rubik">Product Description</h6>
            <hr>
            <p class="font-rale font-size-14">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis sapiente fugit animi sed ratione dolorum eum labore quibusdam quae. Illum quibusdam praesentium dolorem consectetur quaerat officiis suscipit explicabo error recusandae hic nostrum optio necessitatibus eius nesciunt veniam nisi doloremque ea excepturi perferendis asperiores, iure aut eligendi. Sapiente minima aliquid culpa!</p>
            <p class="font-rale font-size-14">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Facilis sapiente fugit animi sed ratione dolorum eum labore quibusdam quae. Illum quibusdam praesentium dolorem consectetur quaerat officiis suscipit explicabo error recusandae hic nostrum optio necessitatibus eius nesciunt veniam nisi doloremque ea excepturi perferendis asperiores, iure aut eligendi. Sapiente minima aliquid culpa!</p>
          </div>
          <!-- !Description -->

        </div>
      </div>
    </section>
<!-- !Product -->
<?php 
endif;
endforeach; 
?>