<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name1 = $_POST["fm-name-1"];
    $name2 = $_POST["fm-name-2"];
    $email = $_POST["fm-email"];
    $password = $_POST["fm-password"];
    $phone = $_POST["fm-phone"];
    $pubgId = $_POST["fm-pubg-id"];
    $age = $_POST["fm-age"];
    $gender = $_POST["fm-gender"];

    // Create a string with the collected data
    $data = "Name 1: $name1\nName 2: $name2\nEmail: $email\nPassword: $password\nPhone: $phone\nBGMI ID: $pubgId\nAge: $age\nGender: $gender\n\n";

    // Specify the file path
    $filePath = "/Users/devangshah/WT/Project/BGMI project/registration_data.txt";

    // Open the file for writing (append mode)
    file_put_contents($filePath, $data, FILE_APPEND | LOCK_EX);

    // Write data to the file
    fwrite($file, $data);

    // Close the file
    fclose($file);

    // Redirect back to the form with a success message
    header("Location: index.html?status=success");
    } 
    else {
    header("Location: index.html?status=error");
    }
?>
