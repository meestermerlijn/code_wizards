<?php
// gebruik van view button-black
/*
view('forms.button-red', [
    'text'=> 'Verstuur',   // optional
    'type'=> 'button',      // optional, default is 'submit'
    'class'=> '',           // optional, extra css classes
]);
 */
?>

<button type="<?=$type??'submit'?>" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700 hover:pointer <?=$class??''?>"><?= $text ?? 'Verstuur' ?></button>

