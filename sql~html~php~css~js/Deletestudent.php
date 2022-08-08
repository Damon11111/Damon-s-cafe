<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DeleteStudent</title>
</head>
<body>
<div id="delete" class="tabcontent">
        <h1>Delete</h1>
        <form  method="POST">
          <br>
          <label for="ID">ID:</label>
          <br>
          <input type="text" name="ID">
          <br>
          <br>
          <input type="submit" name="delete" value="Submit" >
          </form>
    </div>
    
        <?php include 'data.php';?>

        <?php
        
          if(isset($_POST['delete']))
          {
              $ID=$_POST['ID'];
              $query="DELETE FROM student WHERE ID ='$ID' ";
              $query_run = mysqli_query($connect, $query);

              if($query_run)
              {
                  echo '<script type="text/javascript"> alert("Data Delete") </script>';
                  echo '<a href="newmain.php">Go Back</a>';
              }
              else
              {
                  echo '<script type="text/javascript"> alert("Data not Delete") </script>';
              }
          }

          ?>
         

</body>
</html>