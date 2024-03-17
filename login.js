// Function to validate login form inputs
function validateLogin() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    // Check if any field is empty
    if (email == "" || password == "") {
        alert("Please fill in all fields.");
        return false;
    }

    return true;
}
