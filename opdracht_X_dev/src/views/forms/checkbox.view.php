<?php
// Gebruik van view checkbox
/*
view('forms.checkbox', [
    'name' => 'accept_terms', //required
    'label' => 'Coding',      //required
    'checked' => false,       //optional
    'class' => '',            //optional

]);
*/
$i = "_" . rand(1000, 9999);
?>
<div class="flex gap-2 items-center">
    <input type="checkbox" id="<?= ($name ?? '') . $i ?>" name="<?= $name ?? '' ?>" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600 <?= $class ?? '' ?>"
        <?= ($checked ?? false) ? ' checked' : '' ?> >
    <?php if ($label ?? false): ?>
        <label for="<?= ($name ?? '') . $i ?>" class="text-sm font-medium text-gray-900 dark:text-gray-300"><?= $label ?? '' ?></label>
    <?php endif; ?>
</div>

