<div class="container">
    <div class="row">
        <nav class=" nav_edit nav d-flex  justify-content-left">
            <a class="p-2 link-secondary" href="<?= \core\Route::getUrl('index', 'index') ?>">Главная</a>
            <a class="p-2 link-secondary" href="<?= \core\Route::getUrl('product', 'coils') ?>">Катушки</a>
            <a class="p-2 link-secondary" href="<?= \core\Route::getUrl('product', 'rod') ?>">Удилище</a>
            <a class="p-2 link-secondary" href="<?= \core\Route::getUrl('product', 'boats') ?>">Лодки </a>
        </nav>
        <?php if (count($this->product) > 0): ?>
        <?php foreach ($this->product as $product): ?>
        <div class="col">
            <div class="card_edit card  mb-4 rounded-8 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal"><?= $product['name'] ?></h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <div class="cart_img_page">
                                <img class="img_page"
                                     src="../../app/images/product_image/<?= $product['id_images'] ?>.jpg "
                                     alt="img"></div>
                        </div>
                        <div class="col">
                            <h5 class="card-title pricing-card-title"><small
                                        class="text-muted fw-light"><?= $product['description'] ?></small></h5>
                            <div class="text-center">
                                <h4 class="price  d-flex justify-content-center card-title-edit card-title pricing-card-title">
                                    <?= $product['price'] ?> грн
                                </h4>
                                <form onClick="addToCart(<?= $product['id'] ?>);
                                return = false; " id="addCart_<?= $product['id'] ?>"
                                      action="<?= \core\Route::getUrl('cart', 'addToCartAction') ?>" method="post">
                                    <input type="hidden" name="id" value="<?= $product['id'] ?>">
                                    <input type="submit" value="Добавить в корзину"
                                           class=" w-50 btn_edit btn btn-lg btn-outline-primary">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>