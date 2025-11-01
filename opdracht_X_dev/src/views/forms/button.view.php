<?php
// gebruik van view button
/*
view('forms.button-white', [
    'text'=> 'Verstuur'   // optional
    'type'=> 'button'      // optional, default is 'submit'
    'class'=> ''           // optional, extra css classes
]);
 */
?>

<button type="<?=$type??'submit'?>" class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 <?=$class??''?>"><?= $text ?? 'Verstuur' ?></button>


