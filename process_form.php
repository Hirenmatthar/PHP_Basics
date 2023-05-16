<!-- Form Validation -->
<?php
// Validate the form data
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirm_password'];

// Perform validation checks
$errors = [];

if (empty($name)) {
  $errors[] = 'Name is required';
}

if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $errors[] = 'Valid email is required';
}

if (empty($password) || strlen($password) < 6) {
  $errors[] = 'Password must be at least 6 characters long';
}

if ($password !== $confirmPassword) {
  $errors[] = 'Passwords do not match';
}

// Process the form if there are no errors
if (empty($errors)) {
  // Perform further actions (e.g., save data to database, send email, etc.)
  // ...
  // Redirect or display success message
  header('Location: success.php');
  exit();
} else {
  // Display errors to the user
  foreach ($errors as $error) {
    echo $error . '<br>';
  }
}
?>
