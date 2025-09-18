<div x-data="{ modelConfirm: false }" class="<?= $class ?? '' ?>">
    <button @click="modelConfirm =!modelConfirm" class="cursor-pointer flex justify-center text-white text-md bg-red-500 hover:bg-red-600 focus:ring-4 focus:outline-none shadow-md focus:ring-gray-100 font-medium rounded-lg text-sm px-3 py-2 text-center inline-flex items-center ">
        <span> Verwijder </span>
    </button>

    <div x-show="modelConfirm" x-on:keydown.esc.window="modelConfirm=false" class="fixed inset-0 z-50 overflow-y-auto flex justify-center" aria-labelledby="modal-title" role="dialog" aria-modal="true">
        <div x-cloak @click="modelConfirm = true" x-show="modelConfirm"
             x-transition
             class="fixed inset-0 transition-opacity bg-gray-300 opacity-60" aria-hidden="true"
        ></div>
        <div x-cloak x-show="modelConfirm"
             x-transition
             class="fixed inline-block w-full max-w-md p-6 my-10 overflow-hidden text-left transition-all transform bg-white rounded-lg shadow-xl xl:max-w-xl"
        >
            <div class="flex items-center justify-between space-x-4">
                <h1 class="text-xl font-bold text-gray-800 "><?= $titel ?? 'Verwijderen' ?></h1>
            </div>

            <p class="mt-2 text-md text-gray-800 ">
                <?= $content ?? 'Wanneer je verder gaat, wordt dit item permanent verwijderd. Weet je het zeker?' ?>
            </p>

            <x-text-input name="id" type="hidden" value="{{ $site->id }}"></x-text-input>

            <div class="flex justify-end mt-6">
                <button for="show"
                        @click="modelConfirm = false" type="button" class="mr-2 px-2 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-gray-500 hover:bg-gray-600 rounded-md shadow-md cursor-pointer">
                    Annuleren
                </button>
                <form action="<?= $action ?? '' ?>" method="post">
                    <?= csrf(); ?>
                    <?= method_delete(); ?>
                    <button for="show"
                            type="submit"
                            @click="modelConfirm = false" class="mr-2 px-2 py-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-red-500 hover:bg-red-600 rounded-md shadow-md cursor-pointer">
                        Verwijderen
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>