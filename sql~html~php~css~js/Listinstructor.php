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
           <th>name</th>
           <th>major</th>
          </tr>
          <?php $conn = mysqli_connect( "127.0.0.1", "root","Damon2016","test");
          if($conn->connect_error){
            die("connecttion failed:".$conn->connect_error);
          }

          $sql = "SELECT ID,name,major FROM instructor";
          $result = $conn->query($sql);

          if($result->num_rows>0){
            while($row=$result->fetch_assoc()){
                echo "<tr><td>".$row["ID"]."</td><td>".$row["name"]."</td><td>".$row["major"]."</td></tr>";
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