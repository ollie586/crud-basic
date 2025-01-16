<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
 
</body>

</html>