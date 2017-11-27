<?php
function get_genre($pdo){
    
    $req = $pdo->prepare("SELECT * FROM genre");
    
    $req->execute();
    
    return $req->fetchAll();
}
?>