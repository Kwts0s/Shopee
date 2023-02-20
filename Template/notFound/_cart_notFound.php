<!-- Shopping Cart Section -->

<section id="cart" class="py-4 mb-5">
      <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20">Shopping Cart</h5>

        <!-- shopping cart items -->
        <div class="row">
          <div class="col-sm-9">
            <!-- Empty Cart -->
            <div class="row border-top py-3 mt-3">
              <div class="col-sm-12 text-center py-2">
                <img src="./assets/blog/empty_cart.png" alt="Empty Cart" class="img-fluid" style="height: 200px;">
                <p class="font-baloo font-size-16 text-black-50">Empty Cart</p>
              </div>
            </div>
            <!-- !Empty Cart -->
            
            
          </div>

          <!-- Subtotal Section -->
          <div class="col-sm-3">
            <div class="sub-total text-center mt-3 border">
              <h6 class="font-size-12 font-rale text-success py-2 mt-2"><i class="fas fa-check"></i>Your order is eligible for FREE Delivery</h6>
              <div class="border-top py-4">
                <h5 class="font-baloo font-size-20">Subtotal <?=isset($subTotal)? count($subTotal):0; ?> item(s):&nbsp; <span class="text-danger">$<span class="text-danger" id="deal-price"><?= isset($subTotal)? $Cart->getSum($subTotal): 0; ?></span></span></h5>
                <button type="submit" class="btn btn-warning mt-3">Proceed to buy</button>
              </div>
            </div>
          </div>
          <!-- !Subtotal Section -->

        </div>
        <!-- !shopping cart items -->
      </div>
    </section>
    <!-- !Shopping Cart Section -->