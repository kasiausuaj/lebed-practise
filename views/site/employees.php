<style>
   .add_employees{
      display: flex;
      height: 500px;
      flex-direction:column;
      justify-content: center;
   }
   .add_employees button{
      background-color:black;
   }
</style>
<h2>Добавление нового сотрудника отдела</h2>
<h3><?= $message ?? ''; ?></h3>
<form method="post" class='add_employees'>
   <label><input type="text" name="login"placeholder="Логин"></label>
   <label><input type="password" name="password"placeholder="Пароль"></label>

   
   <button>Добавить сотрудника отдела</button>
   
</form> 
