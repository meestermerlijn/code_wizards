<div class="justify-end">
    <?php if (auth()): ?>
        <a href="/logout" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md font-medium">Logout</a>
    <?php else: ?>
        <a href="/login" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md font-medium">Login</a>
    <?php endif; ?>
</div>


<?= password_hash("secret", PASSWORD_BCRYPT); ?>