<?php
//gebruik van view label

/*
view('forms.label', [
    'text' => 'Label tekst', //verplicht, de tekst van het label
    'for' => 'input_id',      //optioneel, default is geen for attribuut
    'required' => true, //optioneel, default is false, als true wordt er een * toegevoegd
    'class' => '', //optioneel, extra css classes voor het label
]);
*/
?>
<label <?= ($for ?? false) ? '' : ''; ?> class="block mb-2 text-sm font-medium text-gray-900 dark:text-white <?= $class??''?>">
    <?=$text??''?><?= ($required??false) ? '<span class="text-red-500 ml-2 '.( $class??'').">*</span>" : '' ?>
</label>
