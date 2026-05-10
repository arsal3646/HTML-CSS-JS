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

/*  Create connection with MySQL/MariaDB database
   
    * $conn is a variable that holds the connection object returned by the mysqli_connect() function.
    
    * The mysqli_connect() function is used to establish a connection to MySQL/MariaDB database server. 
    
    * mysqli_connect() takes four parameters:
        1. "localhost": This is the hostname of the database server. 
            In our case, "localhost" which means the database server is running on the same machine as the PHP script.
        
        2. "root" is the username used to connect to the database. 
            In our case, it is "root" which is default username for MySQL/MariaDB.
        
        3. "" (empty string) is password used to connect to the database. 
            In our case, it is empty string which means there is no password set for the "root" user. 
            In our company, we use ERP system and admin have very strong passwords. They never share with us.

        4. "student_management_system": This is the name of our database to which we want to connect. 
        
*/

$conn = mysqli_connect("localhost", "root", "", "student_management_system");

// Check connection
if (!$conn) {       // The if statement checks if the connection was successful. If $conn is false, it means the connection failed.

    die("Database connection failed: " . mysqli_connect_error());  // die() function is used to terminate the script and display an error message.
}

// SQL query to insert data into the "students" table
// We learnt SQL queries in our Modern Database System course.

// The below line specifies that we want to insert data into the "students" table in our database.
// We are inserting values for all the attributes which we had in our STUDENT FORM, e.g. name of student, ID, etc.
// The VALUES keyword is used to specify the values that we want to insert into the table.

$sql = "INSERT INTO students       
(student_name, student_id, date_of_birth, gender, address, mobile_number, email_id, department)

VALUES
('$student_name', '$student_id', '$date_of_birth', '$gender', '$address', '$mobile_number', '$email_id', '$department')";

mysqli_query($conn, $sql);

echo "Database connected successfully.<br><br>";

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