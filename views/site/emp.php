<h2>Добавление нового сотрудника</h2>
<h3><?= $message ?? ''; ?></h3>
<form method="post">
<input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
   <label><input type="text" name="Surname"placeholder="Фамилия"></label>
   <label><input type="text" name="Name"placeholder="Имя"></label>
   <label><input type="text" name="Patronym"placeholder="Отчество"></label>
   <select name="Gender">
    <option value="man">Мужчина</option>
    <option value="woman">Женщина</option>

    </select>
   <label><input type="date" name="Date_of_Birth"placeholder="Дата рождения"></label>
   <label><input type="text" name="Address"placeholder="Адрес"></label>

   <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
   <label for="subunit_id">Выберите подразделение:</label>
            <select name="subunit_id">
                <option value="">Выберите подразделение</option>
                <?php foreach($subunits as $subunit): ?>
                    <option value="<?= $subunit->id ?>"><?= $subunit->name ?></option>
                <?php endforeach; ?>
            </select>
   <button>Добавить сотрудника отдела</button>
   
</form> 
