<h2>Выбор по подразделениям</h2>
<form method="post" class='d-flex justify-content-center'>
   <div class='border border-5 border-dark center rounded-3'>
   <div>
      <div class="column">
         <div>
         <select name="Subunit_ID">
         <option value="">Выберите подразделение</option>
         <?php foreach($subunits as $subunit): ?>
            <option value="<?= $subunit->getId() ?>"><?= $subunit->name ?></option>
         <?php endforeach; ?>
      </select>
</div>
</div>
</div>
</form>