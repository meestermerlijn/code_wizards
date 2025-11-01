<?php
// Gebruik van view select
/*
view('forms.select', [
    'name' => 'user_id',
    'options' => [
        ['id' => 'option1', 'label' => 'Optie 1'],
        ['id' => 'option2', 'label' => 'Optie 2'],
        ['id' => 'option3', 'label' => 'Optie 3'],
    ],                           // voorbeeld als query: $db->query("SELECT id, name AS label FROM users")->fetchAll();
    'value' => 'option2',        // Optioneel, vooraf geselecteerde waarde
    'class' => '',               // optioneel, extra css classes
    'nullable' => true,          // optioneel, voeg een lege optie toe
    'label' => 'Kies een optie', // optioneel, label voor de select
    'validation' => true,        // optioneel, voegt validatie toe aan het veld
]);
*/
$i = "_" . rand(1000, 9999);
?>
<div class="mb-2">
    <?php ($label ?? false) ? view('forms.label', ['text' => $label ?? '', 'for' => ($name ?? '') . $i]) : '' ?>
    <select name="<?= $name ?? 'select' ?>" id="<?= ($name ?? '') . $i ?>" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500<?= $class ?? '' ?>">
        <?php if (($nullable ?? false)): ?>
            <option value=""></option>
        <?php endif; ?>
        <?php foreach (($options ?? []) as $option): ?>
            <option value="<?= $option['id'] ?>" <?= (($option['id'] ?? null) === ($value ?? '')) ? 'selected' : '' ?>><?= $option['label'] ?></option>
        <?php endforeach; ?>
    </select>
    <?php ($validation ?? true) ? view('forms.validation-msg', ['field' => $name]) : '' ?>
</div>
