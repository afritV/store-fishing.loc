<div class="container">
    <div class="row">
        <h2>Редактировать продукт</h2>
        <?php if (count($this->products) > 0): ?>
        <?php foreach ($this->products as $product): ?>
        <form method="post" action="<?= \core\Route::getUrl('admin', 'updateProduct') ?>">
            <input type="hidden" name="id" value="<?=$product['id']?>" >
            <table class="text-left">
                        <tr>
                            <td>
                                <label for="name">Название товара</label>
                            </td>
                            <td><textarea class="form-control"  cols="100" rows="1" name="name" id="name"><?=$product['name']?></textarea></td>
                        </tr>
                        <tr>
                            <td>
                                <label for="short text">Краткое описание</label>
                            </td>
                            <td>
                                <textarea class="form-control"  cols="100" rows="2" name="partial_description" id="short text"><?=$product['partial_description']?></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="editor">Цена </label>
                            </td>
                            <td><textarea class="form-control"  cols="100" rows="1" name="price" id="price"><?=$product['price']?></textarea></td>
                        </tr>
                        <tr>
                            <td>
                                <label for="categories">Выберите категорию</label>
                            </td>
                            <td>
                                <select class="form-control" id="categories" name="categories">
                                    <option ><?=$product['id_categories']?></option>
                                    <option value="1">Катушки</option>
                                    <option value="2">Удочки</option>
                                    <option value="3">Лодки</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="editor">Полное описание</label>
                            </td>
                            <td><textarea id="editor" cols="100" rows="5" name="description">
                                    <?=$product['description']?>
                                </textarea></td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </table>
            <input class="w-30 btn btn-lg btn-primary" type="submit">
        </form>
    </div>
</div>
<script src="https://cdn.ckeditor.com/ckeditor5/28.0.0/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>
