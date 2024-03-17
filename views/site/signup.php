<h2>Регистрация нового пользователя</h2>
<h3><?= $message ?? ''; ?></h3>
<form method="post">
   <label>Фамилия <input type="text" name="surname"></label>
   <label>Имя <input type="text" name="name"></label>
   <label>Отчество <input type="text" name="patronym"></label>
   <label>Подразделение <input type="text" name="subunit"></label>
   <label>Логин <input type="text" name="login"></label>
   <label>Пароль <input type="password" name="password"></label>
   <label>Отдел
      <select name="role">
         <option value="">Выберите отдел</option>
         <?php foreach($roles as $role): ?>
            <option value="<?= $role->getId() ?>"><?= $role->name ?></option>
         <?php endforeach; ?>
      </select>
   </label>
   <button>Зарегистрироваться</button>
   
</form>
