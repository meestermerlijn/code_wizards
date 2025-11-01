<?php
// Gebruik van view forms.password

/*
view('forms.input', [
    'name' => 'password',        //optional, default is 'password'
    'placeholder' => 'Enter password',   //optional, default is ''
    'required' => true,         //optional, default is false
    'class' => ''               //optional, default is ''
    'validation' => true        //optional, default is true, shows validation message
    'label' => 'Password'       // optional, default ''
    ]);

*/
$pwdToggle = random_int(1000, 9999);
?>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const passwordToggleBtn = document.getElementById('passwordToggle<?=$pwdToggle?>');
        const passwordInput = document.getElementById('password<?=$pwdToggle?>');

        passwordToggleBtn.addEventListener('click', function () {
            const isPassword = passwordInput.type === 'password';
            passwordInput.type = isPassword ? 'text' : 'password';
            passwordToggleBtn.querySelectorAll('svg path, svg circle').forEach(function (icon) {
                icon.classList.toggle('hidden');
                icon.classList.toggle('hs-password-active:hidden');
            });
        });
    });
</script>
<div class="max-w-sm">
    <?php ($label ?? false) ? view('forms.label', ['text' => $label ?? '', 'for' => "password{$pwdToggle}"]) : '' ?>
    <div class="relative">
        <input name="<?= $name ?? 'password' ?>" id="password<?=$pwdToggle?>" type="password" placeholder="<?= $placeholder ?? '' ?>" <?= ($required ?? false) ? 'required' : '' ?> class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 <?= $class ?? '' ?>">
        <button type="button" id="passwordToggle<?=$pwdToggle?>" class="absolute inset-y-0 end-0 flex items-center z-20 px-3 cursor-pointer text-gray-400 rounded-e-md focus:outline-hidden focus:text-blue-600 dark:text-neutral-600 dark:focus:text-blue-500">
            <svg class="shrink-0 size-3.5" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path class="hs-password-active:hidden" d="M9.88 9.88a3 3 0 1 0 4.24 4.24"></path>
                <path class="hs-password-active:hidden" d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68"></path>
                <path class="hs-password-active:hidden" d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61"></path>
                <line class="hs-password-active:hidden" x1="2" x2="22" y1="2" y2="22"></line>
                <path class="hidden hs-password-active:block" d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                <circle class="hidden hs-password-active:block" cx="12" cy="12" r="3"></circle>
            </svg>
        </button>
    </div>
    <?php ($validation ?? true) ? view('forms.validation-msg', ['field' => $name ?? 'password']) : '' ?>
</div>




