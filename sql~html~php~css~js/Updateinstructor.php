<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UpdateInstructor</title>
</head>
<body>
<div id="Insert" class="tabcontent">
        <h1>Update</h1>
        <form  method="POST">
          <br>
          <label for="ID">ID:</label>
          <br>
          <input type="text" name="ID">
          <br>
          <label for="name">name:</label>
          <br>
          <input type="text"  name="name">
          <br>
          <label for="major">major:</label>
          <br>
          <input type="text"  name="major" >
          <br>
          <br>
          <input type="submit" name="update" value="Submit" >
    </div>
    
          <?php include 'data.php';?>

<?php
        
          if(isset($_POST['update']))
          {
            $ID = $_POST['ID'];
            $name = $_POST['name'];
            $major = $_POST['major'];

              $query="UPDATE instructor SET name= '$name',major= '$major' WHERE ID = '$ID' ";
             
              $query_run = mysqli_query($connect, $query);

              if($query_run)
              {
                  echo '<script type="text/javascript"> alert("Data Update") </script>';
                  echo '<a href="newmain.php">Go Back</a>';
              }
              else
              {
                  echo '<script type="text/javascript"> alert("Data not Update") </script>';
              }
          }

          ?>
          </form>
</body>
</html>