<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
      background-color: gray
    }
  </style>
</head>

<body>
    <?php
    include("function.php");
    $id = $_POST['id'];
    $result = $db->query("SELECT name FROM data WHERE id=" . $id);
    while ($row = $result->fetch_assoc()) {
        $name = $row['name'];
    }
    if(isset($_POST['name'])){
        $change = $_POST['name'];
        Edit($db, $id, $change);
        header('location: crud.php');
        exit();
    }else{
        
    }
    ?>

    <form action="update.php" method="post">
        <p>Name</p>
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <input type="text" name="name" value="<?php echo $name ?>"><br>
        <button type="submit" name="create" function>Update</button>
    </form>
</body>

</html>