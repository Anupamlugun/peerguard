<?php
header('Content-Type: application/json');
require "includes/db_conn.php";

// Check if POST request and necessary fields are provided
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['uname']) && isset($_POST['ugender']) && isset($_POST['uage']) && isset($_POST['uprofession']) && isset($_POST['uemail']) && isset($_POST['uphone']) && isset($_POST['upassword'])) {
    // Retrieve form data
    $name = $_POST['uname'];
    $gender = $_POST['ugender'];
    $age = $_POST['uage'];
    $profession = $_POST['uprofession'];
    $email = $_POST['uemail'];
    $phone = $_POST['uphone'];
    $password = password_hash($_POST['upassword'], PASSWORD_DEFAULT);

    try {
        // Check if the email already exists in the database
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            // Email already exists
            echo json_encode([
                "registration" => "exist",
                "message" => "Email already registered."
            ]);
        } else {
            // Prepare an SQL insert statement using placeholders
            $sql = "INSERT INTO users (name, gender, age, profession, email, phone, password) 
                    VALUES (?, ?, ?, ?, ?, ?, ?)";

            // Prepare the statement
            $stmt = $conn->prepare($sql);

            // Execute the statement
            if ($stmt->execute([$name, $gender, $age, $profession, $email, $phone, $password])) {
                echo json_encode([
                    "registration" => "success",
                    "message" => "New user registered successfully!"
                ]);
            } else {
                echo json_encode([
                    "error" => "Error: Could not execute the query."
                ]);
            }
        }
    } catch (PDOException $e) {
        echo json_encode([
            "error" => "Database error: " . $e->getMessage()
        ]);
    }
} else {
    echo json_encode([
        "error" => "Invalid request. Please provide all required fields."
    ]);
}
