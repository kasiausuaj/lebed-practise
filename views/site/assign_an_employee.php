<!-- <h2>Прикрепить сотрудника</h2>
<form method="post" class='d-flex justify-content-center'>
    <div>
        <div class="assign">
            <label for="user">Выберите пользователя:</label>
            <select name="user_id">
                <option value="">Выберите пользователя</option>
                <?php foreach($users as $user): ?>
                    <option value="<?= $user->id ?>"><?= $user->name ?></option>
                <?php endforeach; ?>
            </select>
            
            <label for="subunit_id">Выберите подразделение:</label>
            <select name="subunit_id">
                <option value="">Выберите подразделение</option>
                <?php foreach($subunits as $subunit): ?>
                    <option value="<?= $subunit->id ?>"><?= $subunit->name ?></option>
                <?php endforeach; ?>
            </select>
            
            <button type="submit" class="btn btn-primary">Прикрепить</button>
        </div>
    </div>
</form>
 -->
