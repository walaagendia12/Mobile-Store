<link rel="stylesheet" type="text/css" href="./assets/css/brands.css" />


<div class="container my-5">
  <div class="row row-eq-height">
    <?php
    $sql = "SELECT * FROM `product` ORDER BY `product_id` DESC LIMIT 8";

    if ($result = mysqli_query($db, $sql))
      while ($row = mysqli_fetch_assoc($result)) :
        extract($row); ?>
      <div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-5">
        <div class="product-card h-100 mb-0">
          <a class="product-card__content" href="./?page=cart&id=<?=$product_id?>&action=add">
            <span class="product-card__img" style='background-image:url(./photo/<?= $product_image ?>)'></span>
            <span class="product-card__title">
              <?= $product_name ?>
            </span>
            <span class="product-card__price">
              RS <?=$product_price?>
            </span>
          </a>
          <div class="product-card__actions">
            <a class="product-card__btn mr-3" href="./?page=cart&id=<?=$product_id?>&action=add">
              <i class="fas fa-plus mr-2"></i>
              Add to Cart
            </a>
          </div>
        </div>
      </div>
    <?php endwhile ?>
  </div>
</div>