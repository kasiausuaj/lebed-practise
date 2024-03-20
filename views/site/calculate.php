<?php 
/**
 * @var array $subdivisions 
 */
?>

<h2>Подсчет среднего возраста</h2>
<form method="get" class='d-flex justify-content-center'>
    
   <div class='border border-5 border-dark center rounded-3'>
    
      <div>
         <div class="column">

            <label>Подразделение</label>
            <select name="subdivision">
               <?php if (isset($subdivisions)): ?>
                  <?php foreach ($subdivisions as $subdivision): ?>
                     <option value="<?=$subdivision->ID; ?>"><?=$subdivision->name; ?></option>
                  <?php endforeach ?>
               <?php endif; ?>
               
            </select>

            <?php if (isset($employess)): ?>
               <?php foreach($employess as $employee): ?>
                  <div><?=$employee->Name; ?></div>
               <?php endforeach; ?>
            <?php endif; ?>
               
            <button id="subunit_button">Выбор</button>
            <br>
            <strong>Средний возраст:</strong>

         </div>
      </div>
   </div>
</form> 
