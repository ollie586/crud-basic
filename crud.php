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

    img{
      height: 30px;
      width: 30px;
    }
  </style>
</head>

<body>
  <?php
  include 'function.php';
  ?>
  <a href="create.php"><button>Create</button></a>
  <table>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <td>
        <form action=""></form>
      </td>
      <td></td>
      <td></td>

      
      
    </tr>
    
    <?php
    $sql = "SELECT * FROM data";
    $result = $db->query($sql);
      while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"] . "</td>" . "<td>" . $row["name"] . "</td>
        <td>
        <form action='update.php' method='post'>
          <input type='hidden' name='id' value='" . $row["id"] . "'>
          <button type='submit'>Update</button>
        </form>
      </td>
      <td>
        <form action='delete.php' method='post'>
          <input type='hidden' name='id' value='". $row["id"] . "'>
          <button type='submit'><img src='png-clipart-renca-computer-icons-trash-recycle-bin-miscellaneous-text-thumbnail.png'></button>
        </form>
      </td>
      
      </tr>"; 
      }
    ?>
  </table>
  <?php $db->close(); ?>
</body>

</html>