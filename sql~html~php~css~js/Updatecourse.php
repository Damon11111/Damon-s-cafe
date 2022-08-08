<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UpdateCoures</title>
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
          <label for="instrcutor_Id">Instrcutor_Id:</label>
          <br>
          <input type="text"  name="instrcutor_Id">
          <br>
          <label for="course_name">Course_name:</label>
          <br>
          <input type="text"  name="course_name" >
          <br>
          <label for="credit_hour">Credit_hour:</label>
          <br>
          <input type="text"  name="credit_hour" >
          <br>
          <label for="prerequisite">Prerequisite:</label>
          <br>
          <input type="text"  name="prerequisite" >
          <br>
          <label for="start_time">Start_time:</label>
          <br>
          <input type="text"  name="start_time" >
          <br>
          <label for="end_time">End_time:</label>
          <br>
          <input type="text"  name="end_time" >
          <br>
          <br>
          <input type="submit" name="update" value="Submit" >
    </div>
    <?php include 'data.php';?>

<?php
        
          if(isset($_POST['update']))
          {
            $ID = $_POST['ID'];
            $instrcutor_Id = $_POST['instrcutor_Id'];
            $course_name = $_POST['course_name'];
            $credit_hour = $_POST['credit_hour'];
            $prerequisite = $_POST['prerequisite'];
            $start_time = $_POST['start_time'];
            $end_time = $_POST['end_time'];

              $query="UPDATE course SET instrcutor_Id= '$instrcutor_Id',course_name='$course_name', credit_hour= '$credit_hour',prerequisite= '$prerequisite',start_time= '$start_time',end_time= '$end_time' WHERE ID = '$ID' ";
             
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