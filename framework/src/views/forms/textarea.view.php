<?php
// Gebruik van view textarea

/*
view('forms.input', [
    'name' => 'content',      //required
    'value' => old('content'), //optional, default is ''
    'placeholder' => 'Vul hier uw tekst in...', //optional, default is ''
    'class' => '',             //optional, default is ''
    'required' => true,     //optional, default is false
    ]);

*/
$i = "_".rand(1000, 9999);
?>
<?php ($label ?? false) ? view('forms.label', ['text' => $label ?? '', 'for' => ($name ?? '').$i]) : '' ?>
<textarea name="<?=$name?>" id="<?=($name ?? '').$i?>" placeholder="<?=$placeholder??''?>" <?=($required??false)?'required':''?> class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 <?=$class??''?>"><?=$value??''?></textarea>
<?php ($validation ?? true) ? view('forms.validation-msg', ['field' => $name]) : '' ?>