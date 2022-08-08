<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertinstructor</title>
</head>
<body>
<div id="Insert" class="tabcontent">
        <h1>Insert</h1>
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
          <input type="submit"  name="insert" value="Submit" >
    </div>
        <?php include 'data.php';?>


            <?php

                    if(isset($_POST['insert']))
                    {
                        $ID = $_POST['ID'];
                        $name = $_POST['name'];
                        $major = $_POST['major'];

                        $query="INSERT INTO instructor(ID,name,major) VALUES('$ID','$name','$major')";
                        
                        $query_run = mysqli_query($connect, $query);

                        if($query_run)
                        {
                            echo '<script type="text/javascript"> alert("Data Added") </script>';
                            echo '<a href="newmain.php">Go Back</a>';
                        }
                        else
                        {
                            echo '<script type="text/javascript"> alert("Data not Added") </script>';
                        }
                    }
            ?>
          </form>

</body>
</html>