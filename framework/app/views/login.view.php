<?php
view("parts/header", ['title' => 'Inloggen']);
view("parts/navigatie-menu");

?>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <img class="mx-auto h-10 w-auto" src="/images/anonymous.png" alt="Your Company">
            <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Sign in to your
                account</h2>
        </div>
        <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
            <?php if (errors('login')): ?>
                <p class="text-red-500 text-sm my-2"><?= errors('login') ?></p>
            <?php endif; ?>
            <form class="space-y-6" action="/login" method="post">
                <?= csrf() ?>
                <div>
                    <label for="email" class="block text-sm/6 font-medium text-gray-900">Email address</label>
                    <div class="mt-2 sm:mx-auto sm:w-full sm:max-w-sm">
                        <input id="email" name="email" type="email" value="<?=old('email')?>" autocomplete="email" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                        <?php if (errors('email')): ?>
                            <p class="text-red-500 text-sm my-2"><?=errors('email') ?></p>
                        <?php endif; ?>
                    </div>
                </div>

                <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm/6 font-medium text-gray-90">Password</label>
                        <div class="text-sm">
                            <a href="#" class="font-semibold text-indigo-600 hover:text-indigo-50">Forgot password?</a>
                        </div>
                    </div>
                    <div class="mt-2">
                        <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                        <?php if (errors('password')): ?>
                            <p class="text-red-500 text-sm my-2"><?= errors('password') ?></p>
                        <?php endif; ?>
                    </div>
                </div>

                <div>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                        Sign in
                    </button>
                </div>
            </form>

            <p class="mt-10 text-center text-sm/6 text-gray-500">
                Gratis Tailwind components template van
                <a href="https://tailwindui.com/" class="font-medium text-indigo-600 hover:text-gray-500" target="_blank">TailwindUI</a><br>

            <!-- verwijder onderstaande regels -->
            <p class="text-red-600 mt-4">Om de login te laten werken is een database nodig met een tabel 'users' met
                velden
                'name', 'email', 'password', 'role', 'deleted_at'.</p>
            </p>
            <!-- tot hier verwijderen -->
        </div>
    </div>

<?php
view("parts/footer");
