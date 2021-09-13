<div class="container">
    <div class="row">
        <h2>Создать новый продукт</h2>
        <form method="post" action="<?= \core\Route::getUrl('admin', 'storeProduct') ?>">
            <input type="hidden" name="object" value="product_name">
            <input type="hidden" name="insert" value="<?= $_SESSION['username'] ?>">
            <table>
                <tr>
                    <td>
                        <label for="name">Название товара</label>
                    </td>
                    <td><textarea class="form-control" cols="100" rows="1" name="name" id="name"></textarea></td>
                </tr>
                <tr>
                    <td>
                        <label for="short text">Краткое описание</label>
                    </td>
                    <td>
                        <textarea class="form-control" cols="100" rows="2" name="partial_description"
                                  id="short text"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="price">Цена </label>
                    </td>
                    <td><textarea class="form-control" cols="100" rows="1" name="price" id="price"></textarea></td>
                </tr>
                <tr>
                    <td>
                        <label for="categories">Выберите категорию</label>
                    </td>
                    <td>

                        <select class="form-control" id="categories" name="categories">
                            <option></option>
                            <option value="1">Катушки</option>
                            <option value="2">Удочки</option>
                            <option value="3">Лодки</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="description">Полное описание</label>
                    </td>
                    <td><textarea class="form-control" id="editor" cols="100" rows="5" name="description"></textarea>
                    </td>
                </tr>
                <tr>
                    <td><label for="inputFile" class="sr-only">Загрузить изображение</label></td>
                    <td><input name="file" id="inputFile" type="file"></td>
                </tr>
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


