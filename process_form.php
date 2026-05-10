<!--
    * This is the first time I am creating a PHP file.
    * I will rely on basic and fundamental PHP concepts to create a simple form processing script.
-->

<?php

/* 
    * The below line retrieves the value of the "student_name" field from the submitted form.
    * @student_name is a variable that will hold the value entered by the user in the form field named "student_name".
    
    * The $_POST is used to access the data sent via the HTTP POST method when the form is submitted.
    * The $_POST means like giving form to the office so the office can process the data and give us the result. 
    * In this case, we are processing the form data that contains the student's name. 
*/

$student_name = $_POST["student_name"];

echo "Student Name is: " . $student_name;

?>