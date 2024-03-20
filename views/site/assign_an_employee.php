<h2>Прикрепить сотрудника</h2>
<form method="post" class='d-flex justify-content-center'>
    <div class='border border-5 border-dark center rounded-3'>
        <div>
            <h2 class="mb-4 text-center">Прикрепить<br> сотрудника</h2>
            <label class="user">
      <select name="Users">
         <option value="">Выберите пользователя</option>
         <?php foreach($users as $user): ?>
            <option value="<?= $user->getId() ?>"><?= $user->name ?></option>
         <?php endforeach; ?>
      </select>

   </label>
      </label>
      <select name="Subunit_ID">
         <option value="">Выберите подразделение</option>
         <?php foreach($subunits as $subunit): ?>
            <option value="<?= $subunit->getId() ?>"><?= $subunit->name ?></option>
         <?php endforeach; ?>
      </select>
      
   </label>
                </select>
                
            </div>
            <button class="btn_btn-primary">Прикрепить</button>
        </div>
    </div>
</form>