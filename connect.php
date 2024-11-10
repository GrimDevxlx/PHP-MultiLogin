<?php
    $con = mysqli_connect("localhost", "student_project", "student_project","
    student_project");
    
    if(!$con){
      die("Failed to Start Database Connection");
    }
?>