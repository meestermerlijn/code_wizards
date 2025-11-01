<?php
// gebruik van view validation-msg
/*
view('forms.validation-msg', [
    'field' => 'voornaam'        //required: de naam van het veld waarvan de validatie error getoond moet worden
*/
?>
<?php if (errors($field)): ?>
    <p class="text-red-500 text-sm my-2"><?= errors($field) ?></p>
<?php endif; ?>
