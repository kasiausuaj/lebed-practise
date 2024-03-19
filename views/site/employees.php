<h2>Добавление нового сотрудника</h2>
<h3><?= $message ?? ''; ?></h3>
<form method="post">
   <label><input type="text" name="Surname"placeholder="Фамилия"></label>
   <label><input type="text" name="Name"placeholder="Имя"></label>
   <label><input type="text" name="Patronym" placeholder="Отчество"></label>
   <label class="gender">Пол<br><select name="Gender" id="gender">
      <option value="man">Мужчина</option>
      <option value="woman">Женщина</option>
   </select></label>
   <label><input type="date" name="Date_of_Birth"placeholder="Дата рождения"></label>
   <label><input type="text" name="Address"placeholder="Адрес"></label>
   <label><input type="text" name="Login"placeholder="Логин"></label>
   <label><input type="password" name="Password"placeholder="Пароль"></label>
   
   <label class="subunit">
      <select name="Subunit_ID">
         <option value="">Выберите подразделение</option>
         <?php foreach($subunits as $subunit): ?>
            <option value="<?= $subunit->getId() ?>"><?= $subunit->name ?></option>
         <?php endforeach; ?>
      </select>
      
   </label>

   <label class="subunit">
      <select name="Role">
         <option value="">Выберите роль</option>
         <?php foreach($roles as $role): ?>
            <option value="<?= $role->getId() ?>"><?= $role->name ?></option>
         <?php endforeach; ?>
      </select>
      </label>

   
   <button>Добавить сотрудника</button>
   
</form> 
