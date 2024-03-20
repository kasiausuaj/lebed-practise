<h2>Добавление нового сотрудника</h2>
<h3><?= $message ?? ''; ?></h3>
<form method="post">
   <label><input type="text" name="Surname"placeholder="Фамилия"></label>
   <label><input type="text" name="Name"placeholder="Имя"></label>
   <label><input type="text" name="Patronym"placeholder="Отчество"></label>
   <label><input type="password" name="Name"placeholder="Пол"></label>
   <select name="Gender">
    <option value="man">Мужчина</option>
    <option value="woman">Женщина</option>

    </select>
   <label><input type="date" name="Date_of_Birth"placeholder="Дата рождения"></label>
   <label><input type="text" name="Address"placeholder="Адрес"></label>
   <label><input type="number" name="Age"placeholder="Возраст"></label>
   <button>Добавить сотрудника отдела</button>
   
</form> 
