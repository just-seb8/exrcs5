<?php
session_start();


$validUsername = 'group8';
$validPassword = 'pass';

$response = ['success' => false, 'message' => 'Invalid Username/Password. Please try again.'];


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    
    if ($username === $validUsername && $password === $validPassword) {
        $_SESSION['loggedin'] = true; 
        $_SESSION['username'] = $username; 
        $response['success'] = true; 
    }

 
    header('Content-Type: application/json');
    echo json_encode($response);
}
?>