<?php
// validatie of id wel bestaat
$request->validate([
    'id' => 'required'
]);

// database object aanmaken
$db = new Database();

// query om item te verwijderen
$delete = $db->query("DELETE FROM posts WHERE id = :id", [
    'id' => $request->id
]);

// controleren of post verwijderd is
if($delete->rowCount() == 0){
    flash("Post kon niet verwijderd worden",false);
}else{
    flash("Post is verwijderd");
}

//doorsturen naar de posts pagina
redirect("/posts");