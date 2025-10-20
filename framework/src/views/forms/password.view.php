<?php
// Gebruik van view input

/*
view('forms.input', [
    'name' => 'email',          //required
    'type' => 'email',          //optional, default is text
    'value' => old('email'),    //optional, default is ''
    'placeholder' => '@mail',   //optional, default is ''
    'required' => true,         //optional, default is false
    'class' => ''               //optional, default is ''
    'autocomplete' => 'email'   //optional, default is ''
    'min' => '5'                //optional, default is ''
    'max' => '50'               //optional, default is ''
    'step' => '1'               //optional, default is ''
    'validation' => true        //optional, default is true, shows validation message
    'label' => 'Email address'  // optional, if set will show a label above the input
    ]);

*/
?>
<?php ($label ?? false) ? view('forms.label', ['text' => $label ?? '', 'for' => $name ?? '']) : '' ?>
    <input name="<?= $name ?>" id="<?= $name ?>" type="<?= $type ?? 'text' ?>" value="<?= $value ?? '' ?>" placeholder="<?= $placeholder ?? '' ?>" autocomplete="<?= $autocomplete ?? '' ?>" <?= ($required ?? false) ? 'required' : '' ?> class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 <?= $class ?? '' ?>" <?php ($min ?? '') ? "min=\"$min\"" : "" ?> <?= ($max ?? '') ? "max=\"$max\"" : "" ?> <?= ($step ?? '') ? "step=\"$step\"" : "" ?> >
<?php ($validation ?? true) ? view('forms.validation-msg', ['field' => $name]) : '' ?>