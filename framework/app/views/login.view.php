<?php
view("parts/header", ['title' => 'Inloggen']);
view("parts/navigatie-menu");

?>
    <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-sm">
            <!-- gebruik je eigen logo hier -->
            <img class="mx-auto h-10 w-auto" src="/images/anonymous.png" alt="Your Company">
            <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Sign in to your
                account</h2>
        </div>
        <div class="mt-6 sm:mx-auto sm:w-full sm:max-w-sm">
            <?php if (errors('login')): ?>
                <p class="text-red-500 text-sm my-2"><?= errors('login') ?></p>
            <?php endif; ?>
            <form class="space-y-6" action="/login" method="post">
                <?= csrf() ?>
                <div>
                    <?php
                    view('forms.input', [
                        'name' => 'email',
                        'value' => old('email'),
                        'type' => 'email',
                        'required' => true,
                        'autocomplete' => 'email',
                        'label' => 'Email address',
                    ])
                    ?>
                </div>

                <div>
                    <?php
                    view('forms.password', [
                        'label' => 'Password',
                    ]);
                    ?>
                </div>

                <div>
                    <?php
                    view('forms.button', [
                        'label' => 'Inloggen',
                        'class' => 'w-full'
                    ]);
                    ?>
                </div>
            </form>


            <!-- Verwijder onderstaande regels -->
            <?php if (config('app.env') == 'development'): ?>
                <p class="text-red-600 mt-4"><strong>Verwijderd deze code</strong><br>
                    Development modus is aan daarom krijg je deze melding (te wijzigen in config.php)<br><br>

                    Om de login te laten werken is een database nodig. In config.php staat dat database
                    '<?= config('database.name') ?>' wordt gebruikt.<br>
                    De database moet een tabel 'users' bevatten met de volgende velden:
                    <i>name, email, password, role, deleted_at</i>.<br>
                    De wachtwoorden van de fake-users zijn allemaal 'secret' en moeten als HASH in de database zijn
                    opgeslagen.</p>
                </p>
            <?php endif; ?>
            <!-- tot hier verwijderen -->

        </div>
    </div>

<?php
view("parts/footer");
