
<form method="get" action="/posts-create">
    <input type="text" name="variabele_naam">
    <input type="password" name="password" placeholder="Password" required>
    <button type="submit">Login</button>
</form>

<?php
$request = new Request();

$request->username;

$_POST['username'];
?>
<form action="/posts-store" method="post">
    <input type="hidden" name="_token" value="b754d4e0eae5154d8470acd177561d6f6e23289e349e7682bd6e4dc5cc6b176c586047e94fbef8b6adb8eda6d32d5b7c1d3c9ffc821140487117725b6235b58f8372d54789d993d4535870af23019feb1ab2a983648453b93fe527cb0bb7bc15e4a2fc57adec0fdcfd225cac3a71db52d65dd72d6237f93bf32d8f925a515a16fe48641a2786fa9eabcc4b4bf1d75a56e4b02b0a0481f0b177744a80b4785e72f946f7224ac62799769efbbe134274ebd005765546eaf4a8721f117032f58ac6ec367a9c1afdac8951d541552ee36ff104904d56b902334651928148005dc7fded2896ee061ffe018d1c19e973a3b31fda80c43b8b2a4c0383e35106c6ce8b83">            <input type="text" name="title" placeholder="Titel" required="" value=""><br>
    <textarea name="content" placeholder="Content..."></textarea><br>
    <input type="submit" value="Opslaan" class="border border-1 rounded-md px-2 py-1 hover:bg-gray-100 cursor-pointer">
</form>

