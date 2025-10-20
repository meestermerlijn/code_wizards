<?php
// gebruik van view button-red
/*
view('forms.button-red', [
    'label'=> 'Verstuur'   // optional
    'type'=> 'button'      // optional, default is 'submit'
    'class'=> ''           // optional, extra css classes
]);
 */
?>

<button type="<?=$type??'submit'?>" class="focus:outline-none text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900 <?=$class??''?>"><?= $label ?? 'Verstuur' ?></button>

