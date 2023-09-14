function togglePasswordField() {
    var passwordField = document.getElementById("password");
    var toggleButton = document.getElementById("togglePassword");

    if (passwordField.type === "password") {
        passwordField.type = "text";
        
    } else {
        passwordField.type = "password";
        
    }
}

// Get references to form elements
const loginForm = document.getElementById("loginForm");
const usernameInput = document.getElementById("username");
const passwordInput = document.getElementById("password");
const togglePasswordButton = document.getElementById("togglePassword");

// Function to toggle password visibility
function togglePasswordField() {
  if (passwordInput.type === "password") {
    passwordInput.type = "text";
  } else {
    passwordInput.type = "password";
  }
}

// Function to validate the form
function validateForm() {
  const username = usernameInput.value.trim();
  const password = passwordInput.value.trim();

  if (username === "") {
    alert("Please enter your SR-CODE.");
    return false;
  }

  if (password === "") {
    alert("Please enter your password.");
    return false;
  }

  // If all validation passes, you can submit the form
  return true;
}

// Add a submit event listener to the form
loginForm.addEventListener("submit", function (e) {
  e.preventDefault(); // Prevent the default form submission
  if (validateForm()) {
    // Form is valid, you can proceed with submitting the data to the server
    // You can use AJAX or simply let the form submit naturally
    // Example: loginForm.submit();
    window.location.href = "assessment.php"; // For demonstration purposes
  }
});

// Add a click event listener to the toggle password button
togglePasswordButton.addEventListener("click", togglePasswordField);

window.location.href = "assessment.php";
