<?php
// Gebruik van view input

/*
view('forms.input', [
    'name' => 'email',      //required
    'type' => 'email',      //optional, default is text
    'value' => old('email'), //optional, default is ''
    'autocomplete' => '@mail', //optional, default is ''
    'required' => true,     //optional, default is false
    ]);

*/

?>
<input name="<?=$name?>" type="<?=$type??'text'?>" value="<?=$value??''?>" autocomplete="<?=$autocomplete??''?>" <?=($required??false)?'required':''?> class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6 <?=$class??''?>">