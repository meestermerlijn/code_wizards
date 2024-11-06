<?php
view("parts/header", ['title' => 'Contact']);
view("parts/navigatie-menu");
?>
    <div class="sm:mx-10">
        <h1 class="text-3xl my-4">Contact</h1>

        <div class="border border-1 rounded p-4 bg-gray-50 my-4">
            Je kan ons bereiken via email: <a href="mailto:<?=config('app.email')?>"><?=config('app.email')?></a>
        </div>
    </div>
<?php
view("parts/footer");