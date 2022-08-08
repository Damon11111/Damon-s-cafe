<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>480-project</title>
    <link rel="stylesheet" href="main.css">
</head>
<body style="margin:30px">
    
  <script src="main.js"></script>
  <script src="data.js"></script>

    <h2>Database</h2>
    <p>Click on the buttons to start your database</p>
    
    <div class="tab">
      <button class="tablinks" onclick="openForm(event, 'Insert')">Insert</button>
      <button class="tablinks" onclick="openForm(event, 'Delete')">Delete</button>
      <button class="tablinks" onclick="openForm(event, 'Update')">Update</button>
      <button class="tablinks" onclick="openForm(event, 'List')">List</button>
      <button class="tablinks" onclick="openForm(event, 'Find')">Find</button>
      
    </div>
    
    <div id="Insert" class="tabcontent">
        <h1>Select Table:</h1>
        
        <button onclick="Insertcourseclick()">Course</button>
        <br>
        <br>
        <button onclick="InsertCourse_Admissionclick()">Course_Admission</button>
        <br>
        <br>
        <button onclick="Insertinstructorclick()">Instructor</button>
        <br>
        <br>
        <button onclick="Insertstudentclick()">Student</button>
        <br>
        <br>
      
    </div>
    
    
    <div id="Delete" class="tabcontent">
    <h1>Select Table:</h1>
        
        <button onclick="Deletecourseclick()">Course</button>
        <br>
        <br>
        <button onclick="DeleteCourse_Admissionclick()">Course_Admission</button>
        <br>
        <br>
        <button onclick="Deleteinstructorclick()">Instructor</button>
        <br>
        <br>
        <button onclick="Deletestudentclick()">Student</button>
        <br>
        <br>
    </div>
    
    <div id="Update" class="tabcontent">
      <h1>Update</h1>
      <button onclick="Updatecourseclick()">Course</button>
        <br>
        <br>
        <button onclick="UpdateCourse_Admissionclick()">Course_Admission</button>
        <br>
        <br>
        <button onclick="Updateinstructorclick()">Instructor</button>
        <br>
        <br>
        <button onclick="Updatestudentclick()">Student</button>
        <br>
        <br>
    </div>

    <div id="List" class="tabcontent">
    <h1>List</h1>
      <button onclick="Listcourseclick()">Course</button>
        <br>
        <br>
        <button onclick="ListCourse_Admissionclick()">Course_Admission</button>
        <br>
        <br>
        <button onclick="Listinstructorclick()">Instructor</button>
        <br>
        <br>
        <button onclick="Liststudentclick()">Student</button>
        <br>
        <br>
    </div>

    <div id="Find" class="tabcontent">
        <h1>Find</h1>
        <button onclick="Findcourseclick()">Course</button>
        <br>
        <br>
        <button onclick="FindCourse_Admissionclick()">Course_Admission</button>
        <br>
        <br>
        <button onclick="Findinstructorclick()">Instructor</button>
        <br>
        <br>
        <button onclick="Findstudentclick()">Student</button>
        <br>
        <br>
    </div>

</body>
</html>
    
    
