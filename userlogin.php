<?php
//session_start();
header('Content-Type: application/json');
require "includes/db_conn.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['uemail']) && isset($_POST['upassword'])) {
    $uemail = $_POST['uemail'];
    $upassword = $_POST['upassword'];
    $login = "failed";
    $loginid = "";

    try {
        // Prepare and execute the query securely
        $stmt = $conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$uemail]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result && password_verify($upassword, $result['password'])) {
            $login = "success";
            // session_regenerate_id(true); // Secure the session
            // $_SESSION['uid'] = $result['id'];
            // $loginid = $_SESSION['uid'];
        } else {
            //session_destroy(); // Destroy session on failed login
        }

        // Return response as JSON
        $data = [
            "login" => $login,
            "loginid" => $loginid
        ];
    } catch (PDOException $e) {
        $data = ["error" => "Database error: " . $e->getMessage()];
    }

    echo json_encode($data);
} else {
    echo json_encode(["error" => "Please fill all fields"]);
}
