// Function to validate sign-up form inputs
function validateSignUp() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    // Check if any field is empty
    if (email == "" || password == "") {
        alert("Please fill in all fields.");
        return false;
    }

    // Check if the password is strong enough min 8 so this is a validation rule
    if (password.length < 8) {
        alert("Password must be at least 8 characters long.");
        return false;
    }

    

    return true;
}
