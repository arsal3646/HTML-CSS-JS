alert("Welcome to the Student Form area!");

/* Name Validation:
        The below function will check if the name field is empty and alert the user if it is not filled in.
        * "document."" means we are accessing the HTML document.
        * "getElementById" is a method that allows us to access an element by its ID.
        * ".value" gets the value of that element. 

        Using if statement, we check if the value is an empty string. If yes, we alert the user that the name cannot be empty.
*/  

function checkName() {

    var nameValue = document.getElementById("studentName").value;

    if (nameValue === "") {
        alert("Name field cannot be empty. Please enter your name.");
    }

}