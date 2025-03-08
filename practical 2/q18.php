<?php
class Validation {
    public function validateEmail($email) {
        return preg_match("/^[a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/", $email);
    }

    public function validatePassword($password) {
        return preg_match("/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)[A-Za-z\d]{8,}$/", $password);
    }

    public function validateInput($input, $type) {
        if ($type === 'number') {
            return preg_match("/^[0-9]+$/", $input);
        }
        return false;
    }
}

// Example usage
$validation = new Validation();

$email = "test@example.com";
$password = "Pass1234";
$number = "123456";

echo "Email Valid: " . ($validation->validateEmail($email) ? 'Yes' : 'No') . "<br><br>";
echo "Password Valid: " . ($validation->validatePassword($password) ? 'Yes' : 'No') . "<br><br>";
echo "Number Valid: " . ($validation->validateInput($number, 'number') ? 'Yes' : 'No') . "<br><br>";
?>
