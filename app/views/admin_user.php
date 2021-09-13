<div class="container">
    <div class="row">
        <h2 class="text-center mt-5 mb-5" >Список пользователей</h2>
        <table class="table text-center">
            <th>id</th>
            <th>Имя</th>
            <th>Емейл</th>
            <?php if (count($this->user) > 0): ?>
                <?php foreach ($this->user as $user): ?>
                    <tr>
                        <td>
                            <?= $user['id'] ?>
                        </td>
                        <td>
                            <?= $user['login'] ?>
                        </td>
                        <td>
                            <?= $user['email'] ?> грн
                        </td>
                    <td>
                        <form action="<?= \core\Route::getUrl('admin', 'delete') ?>" method="post">
                            <input type="hidden" name="id" value="<?= $user['id'] ?>">
                            <input  type="submit" value="delete" id="del" class="w-30 btn btn-sm btn-danger">
                        </form>
                    </td>
                    </tr>
                <?php endforeach; ?>
            <?php endif; ?>
        </table>
        <div class="button-admin col-md-3 mt-10">
            <a class="w-10 btn btn-sm btn-primary" href="<?= \core\Route::getUrl('admin', 'create') ?>" class="create">Добавить пользователя</a>
        </div>
    </div>
</div>


