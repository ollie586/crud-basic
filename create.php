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
    <?php include("function.php");
    if(isset($_POST["name"])){
      $name = $_POST["name"];
      Create($db, $name);
      header('location: crud.php');
      exit();
    }

    ?>
    
    <form action="create.php" method="post">
        <p>Name</p>
        <input type="text" name="name"><br>
        <button type="submit" name="create" function>Create</button>
    </form>
</body>

</html>