<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find</title>
</head>
<body>
    <div id="Find" class="tabcontent">
        <h1>Find</h1>
        <form  method="POST">
        Search <input type="text" name="find"><br>

        Column: <select name="column">
                <option>Select</option>
                <option value="ID">ID</option>
                <option value="instrcutor_Id">Instructor_Id</option>
                <option value="course_name">Course_name</option>
                <option value="credit_hour">Credit_hour</option>
                <option value="prerequisite">Prerequisite</option>
                </select><br>
        <input type ="submit" name="search" value="Submit">  
        <br>
        <br>
        <br>
        <br>
        </form>
    </div>
    <div>
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
       

        <?php include 'data.php';?>

            <?php
            if(isset($_POST['search']))
            {
            $search = $_POST['find'];
            $column = $_POST['column'];

            if ($connect->connect_error){
                die("Connection failed: ". $connect->connect_error);
            }

            $sql = "select * from course where $column like '%$search%'";

            $result = $connect->query($sql);

            if ($result->num_rows > 0){
                while($row = $result->fetch_assoc() ){
                    echo "<tr><td>".$row["ID"]."</td><td>".$row["instrcutor_Id"]."</td><td>".$row["course_name"]."</td><td>".$row["credit_hour"]."</td><td>".$row["prerequisite"]."</td><td>".$row["start_time"]."</td><td>".$row["end_time"]."</td></tr>"; 
                }
                echo "</table>";
            } 
            
            else {
                echo "0 records";
                echo '<a href="newmain.php">Go Back</a>';
            }
        }

            $connect->close();
            ?>
        </table>
    </div>
</body>
</html>