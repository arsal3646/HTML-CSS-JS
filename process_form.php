<!--
    * This is the first time I am creating a PHP file.
    * I will rely on basic and fundamental PHP concepts to create a simple form processing script.
-->

<?php           // Start of PHP code block

/* 
    * The below line retrieves the value of the "student_name" field from the submitted form.
    * @student_name is a variable that will hold the value entered by the user in the form field named "student_name".
    
    * The $_POST is used to access the data sent via the HTTP POST method when the form is submitted.
    * The $_POST means like giving form to the office so the office can process the data and give us the result. 
    * In this case, we are processing the form data that contains the student's name. 
*/

$student_name = $_POST["student_name"];    // retrieves "student_name" value from submitted form

$student_id = $_POST["student_id"];         // retrieves "student_id" value from submitted form

$date_of_birth = $_POST["date_of_birth"];   // retrieves "date_of_birth" value from submitted form

$gender = $_POST["gender"];                 // retrieves "gender" value from submitted form

$address = $_POST["address"];               // retrieves "address" value from submitted form

$mobile_number = $_POST["mobile_number"];   // retrieves "mobile_number" value from submitted form

$email_id = $_POST["email_id"];             // retrieves "email_id" value from submitted form

$department = $_POST["department"];         // retrieves "department" value from submitted form


/*  * The below lines of code are used to display the retrieved values on the webpage.
    * The dot operator (.) is used to concatenate just like we use + in JavaScript and Java.
*/

echo "Student Name: " . $student_name . "<br>"; // displays the value of $student_name variable followed by a line break

echo "Student ID: " . $student_id . "<br>";     // displays the value of $student_id variable

echo "Date of Birth: " . $date_of_birth . "<br>"; // displays the value of $date_of_birth variable

echo "Gender: " . $gender . "<br>";          // displays the value of $gender variable

echo "Address: " . $address . "<br>";         // displays the value of $address variable

echo "Mobile Number: " . $mobile_number . "<br>"; // displays the value of $mobile_number variable  

echo "Email ID: " . $email_id . "<br>";     // displays the value of $email_id variable

echo "Department: " . $department . "<br>";     // displays the value of $department variable

// End of PHP code block
?>