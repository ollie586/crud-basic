<?php
include 'database.php';
    function Create($db, $name){
        $sql = "INSERT INTO data(name) VALUES ('$name')";
        $result = $db->query($sql);
    }

    function Edit($db, $id, $name){
        $sql = "UPDATE data SET name = '$name' WHERE id=$id";
        $result = $db->query($sql);
    }

    function Delete($db, $id){
        $sql = "DELETE FROM data WHERE id=$id";
        $result = $db->query($sql);
    }
?>