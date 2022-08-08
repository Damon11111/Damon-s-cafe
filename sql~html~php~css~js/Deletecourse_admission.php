<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DeleteCourse_admission</title>
</head>
<body>
<div id="delete" class="tabcontent">
        <h1>Delete</h1>
        <form  method="POST">
          <br>
          <label for="course_ID">Course_ID:</label>
          <br>
          <input type="text" name="course_ID">
          <br>
          <br>
          <input type="submit" name="delete" value="Submit" >
          </form>
    </div>
    
        <?php include 'data.php';?>

        <?php
        
          if(isset($_POST['delete']))
          {
              $course_ID=$_POST['course_ID'];
              $query="DELETE FROM course_admission WHERE course_ID ='$course_ID' ";
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