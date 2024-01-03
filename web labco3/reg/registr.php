<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $contact_number = test_input($_POST["contact_number"]);
    $address = test_input($_POST["address"]);
    $password = test_input($_POST["password"]);
    $confirm_password = test_input($_POST["confirm_password"]);

    // Perform additional validations if needed

    // For demonstration, just echoing the values
    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Contact Number: " . $contact_number . "<br>";
    echo "Address: " . $address . "<br>";
    echo "Password: " . $password . "<br><br>";
    echo "Confirm Password: " . $confirm_password . "<br>";
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>