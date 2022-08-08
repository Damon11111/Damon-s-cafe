<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UpdateCourse_Admission</title>
</head>
<body>
<div id="Insert" class="tabcontent">
        <h1>Update</h1>
        <form  method="POST">
          <br>
          <label for="student_ID">Student_ID:</label>
          <br>
          <input type="text" name="student_ID">
          <br>
          <label for="course_ID">Course_ID:</label>
          <br>
          <input type="text"  name="course_ID">
          <br>
          <label for="instructor_ID">Instructor_ID:</label>
          <br>
          <input type="text"  name="instructor_ID" >
          <br>
          <label for="course_name">Course_name:</label>
          <br>
          <input type="text"  name="course_name" >
          <br>
          <label for="credit_hour">Credit_hour:</label>
          <br>
          <input type="text"  name="credit_hour" >
          <br>
          <br>
          <input type="submit" name="update" value="Submit" >
    </div>
    
          <?php include 'data.php';?>

<?php
        
          if(isset($_POST['update']))
          {
            $student_ID = $_POST['student_ID'];
            $course_ID = $_POST['course_ID'];
            $instructor_ID = $_POST['instructor_ID'];
            $course_name = $_POST['course_name'];
            $credit_hour = $_POST['credit_hour'];

              $query="UPDATE course_admission SET course_ID= '$course_ID',instructor_ID= '$instructor_ID',course_name='$course_name', credit_hour= '$credit_hour' WHERE student_ID = '$student_ID' ";
             
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