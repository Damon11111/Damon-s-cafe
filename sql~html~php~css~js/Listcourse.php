<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listcourse</title>
</head>
<body>
<div id="List" class="tabcontent">
        <h1>List</h1>
        <table>
          <tr>
           <th>ID</th>
           <th>instrcutor_Id</th>
           <th>course_name</th>
           <th>credit_hour</th>
           <th>prerequisite</th>
           <th>start_time</th>
           <th>end_time</th>
          </tr>
          <?php $conn = mysqli_connect( "127.0.0.1", "root","Damon2016","test");
          if($conn->connect_error){
            die("connecttion failed:".$conn->connect_error);
          }

          $sql = "SELECT ID,instrcutor_Id,course_name,credit_hour,prerequisite,start_time,end_time FROM course";
          $result = $conn->query($sql);

          if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                echo "<tr><td>".$row["ID"]."</td><td>".$row["instrcutor_Id"]."</td><td>".$row["course_name"]."</td><td>".$row["credit_hour"]."</td><td>".$row["prerequisite"]."</td><td>".$row["start_time"]."</td><td>".$row["end_time"]."</td></tr>";
            }
            echo "</table>";
          }
          else{
            echo "0 result";
          }

          $conn->close();
          ?>
        </table>
    </div>
</body>
</html>