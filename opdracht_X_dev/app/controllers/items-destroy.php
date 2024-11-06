<?php

$db = new Database();
$delete = $db->query("DELETE FROM items WHERE id = :id", [
    'id' => $request->id
]);

if($delete->rowCount() == 0){
    flash("Item kon niet verwijderd worden",false);
}else{
    flash("Item is verwijderd");
}

//doorsturen naar de index pagina
redirect("/items");