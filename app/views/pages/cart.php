<!-- Shop Grid Section -->
<section id="portfolio" class="bg-light-gray">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-heading">Shop</h2>
        <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
      </div>
    </div>

    <button class="button--big cart-action" data-action="clean">Empty Cart</button>
    <div class="row">

      <?php foreach ($products as $product): ?>

        <div class="col-md-4 col-sm-6 portfolio-item">
          <button class="button--item cart-action" data-toggle="modal" data-action="remove" data-product-id="<?php echo $product->id; ?>">
            Remove Item
          </button>
          <img src="<?php echo RESOURCES_PATH . '/images/' . $product->image; ?>" class="img-responsive" alt="">
          <div class="portfolio-caption">
            <h4><?php echo $product->name; ?></h4>
            <p class="text-muted"><?php echo $product->description; ?></p>
            <p class="text-muted"><?php echo $product->price; ?></p>
            <p class="text-muted"><?php echo $product->category; ?></p>
          </div>
        </div>

      <?php endforeach; ?>
    </div>
</section>
