// alert("Welcome to the Student Form area!");

/* Rule 1: Name field should not be empty.
        The below function will check if the name field is empty and alert the user if it is not filled in.
        * "document."" means we are accessing the HTML document.
        * "getElementById" is a method that allows us to access an element by its ID.
        * ".value" gets the value of that element. 
        * The trim() method removes whitespace from both ends of a string.

        Using if statement, we check if the value is an empty string. If yes, we alert the user that the name cannot be empty.
*/  

function NameValidation() {

    var name = document.getElementById("studentName").value.trim(); 
       
    if (name === "") {
        alert("Name field cannot be empty. Please enter your name.");
        return; // Exit the function if the name is empty. Otherwise, the function will continue to check the next rule even if the name is empty.
    }

/* Rule 2: Name should only contain letters and spaces.
        
        The below function will check if the name field contains only letters and spaces. 
        
        * I am using a regular expression /^[A-Za-z\s]+$/ to define the allowed characters (letters and spaces).
        * "/" at the beginning and end of the regular expression denotes that it is a regular expression literal. 
        * We studied regular expressions in Command Line Interface (CLI) course, and they are used to match patterns in strings.
        
        * "A-Z" means uppercase letters
        * "a-z" means lowercase letters
        * The "+" means that there can be one or more of these characters.
        
        * The $ at the end of the regular expression indicates the end of the string, ensuring that the entire string must match the pattern. 
         
        * The test() method is used to check if the name matches the regular expression. 
        * If it does not match, we alert the user that the name should only contain letters and spaces.
        * 
        * The exclamation mark "!" shows that if the name "does not match" the regular expression, the alert will be triggered.
*/

var alphabetCheck = /^[A-Za-z ]+$/;

if (!alphabetCheck.test(name)) {
    alert("Name should only contain letters and spaces. Please enter a valid name.");
}
}

/* Rule 3: Date of Birth field should not be empty.
        
        * The below function will check if the date of birth field is empty and alert the user if it is not filled in.
        * Similar to the name validation, we access the date of birth input field using its ID "dob" and get its value.
        * We trim the value to remove any spaces from the beginning or end of the string.
        * If the value is an empty string, we alert the user that the date of birth cannot be empty.
*/

/* Rule 4: Date of Birth should be in the format "DD/MM/YYYY".

        * The below function will check if the date of birth is in the correct format using a regular expression.
        * As mentioned earlier, we studied regular expressions in the Command Line Interface (CLI) course.
        * They are a powerful tool for pattern matching in strings.
        * regular expressions are used to match patterns in strings. In this case, we want to ensure that the date of birth follows the "DD/MM/YYYY" format.

        * Let us break down the regular expression:
        * ^ means the start of the string.
        * \d{2} matches exactly two digits (for the day).
        * \d{2} matches exactly two digits (for the month).
        * \/ matches the literal "/" character.
        * \d{4} matches exactly four digits (for the year).
        * $ means the end of the string
        
        * if statement checks if the date of birth does not match the regular expression pattern. 
        * If it does not match, we alert the user that the date of birth must be in the correct format.
*/

function validateDOB() {

    var dobValue = document.getElementById("dob").value.trim();

    if (dobValue === "") {
        alert("Date of Birth cannot be empty.");
        return;
    }

    var dobPattern = /^\d{2}\/\d{2}\/\d{4}$/;

    if (!dobPattern.test(dobValue)) {
    alert("Please note that Date of Birth must be in dd/mm/yyyy format. Please enter a valid date of birth.");
}

}