<div class="container ">
    <div class="row">
        <h2 class="text-center mt-5 mb-5">Список продуктов</h2>
        <table class="table text-center">
            <th>id</th>
            <th>Название</th>
            <th>Цена продукта</th>
            <th>Категория продукта</th>
            <?php if (count($this->products) > 0): ?>
                <?php foreach ($this->products as $product): ?>
                    <tr>
                        <td>
                            <?= $product['id'] ?>
                        </td>
                        <td>
                            <?= $product['name'] ?>
                        </td>
                        <td>
                            <?= $product['price'] ?> грн
                        </td>
                        <td>
                            <?= $product['id_categories'] ?>
                        </td>
                        <td>
                            <form action="<?= \core\Route::getUrl('admin', 'deleteProduct') ?>" method="post">
                                <input type="hidden" name="id" value="<?= $product['id'] ?>">
                                <input type="submit" value="delete" id="del" class="w-30 btn btn-sm btn-danger">
                            </form>
                        </td>
                        <td>
                            <form action="<?= \core\Route::getUrl('admin', 'showEditProduct') ?>" method="post">
                                <input type="hidden" name="name" value="<?= $product['name'] ?>">
                                <input type="hidden" name="id" value="<?= $product['id'] ?>">
                                <input type="submit" value="edit" class="edit w-30 btn btn-sm btn-warning">
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </table>
        <div class="button-admin col-md-2 mt-10">
            <a class="w-10 btn btn-sm btn-primary" href="<?= \core\Route::getUrl('admin', 'create_product') ?>"
               class="create">Добавить товар</a>
        </div>
    </div>
</div>


