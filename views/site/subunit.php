<h2>Добавление подразделения</h2>
<h3><?= $message ?? ''; ?></h3>
<form method="post">
       <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
<label>
    Название подразделения<input type="text" name="Name"></label>
   <button>Добавить подразделения</button>
   
</form>
