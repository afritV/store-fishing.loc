<div class="container">
    <div class="row">
        <nav class=" nav_edit nav d-flex  justify-content-left">
            <a class="p-2 link-secondary" href="<?= \core\Route::getUrl('index', 'index')?>">Главная</a>
            <a class="p-2 link-secondary" href="<?= \core\Route::getUrl('product', 'coils')?>">Катушки</a>
            <a class="p-2 link-secondary" href="<?= \core\Route::getUrl('product', 'rod')?>">Удилище</a>
            <a class="p-2 link-secondary" href="<?= \core\Route::getUrl('product', 'boats')?>">Лодки </a>
        </nav>
        <?php if (count($this->products) > 0): ?>
            <?php foreach ($this->products as $product): ?>
                <div class="col-md-4 col-sm-12">
                    <div class="card_edit card  mb-4 rounded-8 shadow-sm">
                        <div class="card-header py-3">
                            <h4 class="my-0 fw-normal"><?= $product['name'] ?></h4>
                        </div>
                        <div class="card-body">
                            <div class="cart_img">
                                <form  action="<?= \core\Route::getUrl('product', 'index') ?>" method="post">
                                    <input type="hidden" name="name" value="<?= $product['name'] ?>">
                                    <input type="hidden" name="id" value="<?= $product['id'] ?>">
                                    <input type="image" alt="img" src="../../app/images/product_image/<?= $product['id_images']?>.jpg"  class="w-100 btn_edit btn">
                                </form>
                            </div>
                            <h5 class="card-title pricing-card-title"><small
                                    class="text-muted fw-light"><?= $product['partial_description'] ?></small></h5>

                            <h6 class=" card-title-edit card-title pricing-card-title">
                                <?= $product['price'] ?> грн
                            </h6>
                            <form  action="<?= \core\Route::getUrl('product', 'index') ?>" method="post">
                                <input type="hidden" name="name" value="<?= $product['name'] ?>">
                                <input type="hidden" name="id" value="<?= $product['id'] ?>">
                                <input type="submit" value="Подробнее" class="w-100 btn_edit btn btn-lg btn-outline-primary">
                            </form>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>
