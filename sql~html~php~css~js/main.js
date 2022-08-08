
  function openForm(event, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }

  function Insertcourseclick(){
    window.location.href='Insertcourse.php';
}

  function InsertCourse_Admissionclick(){
  window.location.href='InsertCourse_Admission.php';
}

function Insertinstructorclick(){
  window.location.href='Insertinstructor.php';
}

function Insertstudentclick(){
  window.location.href='Insertstudent.php';
}

function Deletecourseclick(){
  window.location.href='Deletecourse.php';
}

function DeleteCourse_Admissionclick(){
window.location.href='Deletecourse_Admission.php';
}

function Deleteinstructorclick(){
window.location.href='Deleteinstructor.php';
}

function Deletestudentclick(){
window.location.href='Deletestudent.php';
}


function Updatecourseclick(){
  window.location.href='Updatecourse.php';
}

function UpdateCourse_Admissionclick(){
window.location.href='Updatecourse_Admission.php';
}

function Updateinstructorclick(){
window.location.href='Updateinstructor.php';
}

function Updatestudentclick(){
window.location.href='Updatestudent.php';
}


function Listcourseclick(){
  window.location.href='Listcourse.php';
}

function ListCourse_Admissionclick(){
window.location.href='Listcourse_Admission.php';
}

function Listinstructorclick(){
window.location.href='Listinstructor.php';
}

function Liststudentclick(){
window.location.href='Liststudent.php';
}


function Findcourseclick(){
  window.location.href='Findcourse.php';
}

function FindCourse_Admissionclick(){
window.location.href='FindCourse_admission.php';
}

function Findinstructorclick(){
window.location.href='Findinstructor.php';
}

function Findstudentclick(){
window.location.href='Findstudent.php';
}









  

    


  



