<link rel="stylesheet" href="./assets/css/cart.css">
<?php
if(isset($_GET['action']) && $_GET['action'] == 'add'){
    $product_id = $_GET['id'];
    $sql = "INSERT INTO `cart`(`product_id`) VALUES ('$product_id')";
    mysqli_query($db, $sql);
}

if(isset($_GET['action']) && $_GET['action'] == 'remove'){
    $product_id = $_GET['id'];
    $sql = "DELETE FROM `cart` WHERE `product_id` = '$product_id'";
    mysqli_query($db, $sql);
}
?>
<div id="banner">
    <div class="px-4 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="flex flex-col items-center justify-between w-full mb-10 lg:flex-row">
            <div class="mb-16 lg:mb-0 lg:max-w-lg lg:pr-5">
                <div class="max-w-xl mb-6">
                    <div>
                    </div>
                    <h2 class="max-w-lg mb-6 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
                        YOUR CART<br class="hidden md:block" />
                        <span class="inline-block text-deep-purple-accent-400"></span>
                    </h2>
                    <p class="text-base text-gray-700 md:text-lg">
                        This page is specially design for our product details. We care about our clients. All detail about our shop is here. you can also order from home.
                    </p>
                </div>
                <!-- <div class="flex items-center space-x-3">
                    <a href="/" class="w-32 transition duration-300 hover:shadow-lg">
                        <img src="https://kitwind.io/assets/kometa/app-store.png" class="object-cover object-top w-full h-auto mx-auto" alt="" />
                    </a>
                    <a href="/" class="w-32 transition duration-300 hover:shadow-lg">
                        <img src="https://kitwind.io/assets/kometa/google-play.png" class="object-cover object-top w-full h-auto mx-auto" alt="" />
                    </a>
                </div> -->
            </div>
            <div class="flex items-center justify-center lg:w-1/2" style="margin-top: 50px;">
                <div class="w-2/5">
                    <img class="object-cover" src="https://kitwind.io/assets/kometa/one-girl-phone.png" alt="" />
                </div>
                <div class="w-5/12 -ml-16 lg:-ml-32">
                    <img class="object-cover" src="https://kitwind.io/assets/kometa/two-girls-phone.png" alt="" />
                </div>
            </div>
        </div>
        
    </div>
</div>
<div class="cart">
    <div class="container">
        <div class="grid_12">
        </div>
        <ul class="items">
            <?php
            $sql = "SELECT * FROM cart INNER JOIN product ON cart.product_id=product.product_id";

            if ($result = mysqli_query($db, $sql))
              while ($row = mysqli_fetch_assoc($result)) :
                extract($row); ?>
            <li class="grid_4 item">
                <a href="./?page=cart&id=<?= $product_id ?>&action=remove" class="btn-remove">
                    <i class="far fa-trash-alt"></i>
                </a>
                <div class="preview">
                    <img src="./photo/<?= $product_image ?>" style="height: 100px !important; object-fit: contain; object-position: left; margin: 10px" />
                </div>
                <div class="details" data-price="15.50">
                    <h3>
                    <?= $product_name ?>
                    </h3>
                    <p><?= $brand ?></p>

                </div>
                <div class="inner_container">

                    <div class="col_1of2 align-center picker">
                        <p>
                            <a href="#" class="btn-quantity plus">
                                <i class="fas fa-plus"></i>
                            </a>
                        <div class="col_1of2 quantity-text">
                            <p><span class="current_quantity">1</span> @ RS <?=$product_price?></p>
                        </div>
                        <a href="#" class="btn-quantity minus">
                            <i class="fas fa-minus"></i>
                        </a>
                        </p>
                        <input type="hidden" class="quantity_field" name="quantity" data-price="<?=$product_price?>" value="1" />
                    </div>
                </div>

            </li>
            <?php endwhile ?>
        </ul>
        <div class="grid_12 delivery-payment">
            <div class="grid_6 delivery-address">
                <h3>Delivery Address</h3>
                <p>46 Vale Road</br>
                    Ramsgate</p>
            </div>
            <div class="grid_6 payment-details">
                <h3>Payment Card</h3>
                <p> **** **** **** 8678</p>
            </div>
        </div>
        <div class="grid_12 summary">
            <div class="inner_container">
                <div class="summary-content">
                    <div class="col_1of2 meta-data">
                        <div class="sub-total">
                            <em>Sub Total: </em><span class="amount"></span>
                        </div>
                        <div class="taxes">
                            <em>Plus VAT: </em><span class="amount">@ 20%</span>
                        </div>

                    </div>
                    <div class="col_1of2">
                        <div class="total">
                            <span class="amount"></span>
                        </div>
                    </div>
                </div>
                <div class="btn-summary">

                    <a href="./?page=products" class="btn-checkout btn-reverse">Continue Shopping</a>

                    <a href="https://www.sandbox.paypal.com/us/signin" class="btn-checkout">Checkout</a>

                </div>
            </div>
        </div>
    </div>
</div>
<script src="./assets/js/cart.js"></script>