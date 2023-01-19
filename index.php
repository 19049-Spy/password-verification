<?php

// Get the received password
$password = $_POST['password'];

// Hash the password for security
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Check if the provided password matches the hashed password
if (password_verify($password, $hashed_password)) {
    $response = array(
        'status' => 'success',
        'message' => 'Password is valid'
    );
} else {
    $response = array(
        'status' => 'error',
        'message' => 'Password is invalid'
    );
}

// Create a digital signature
$private_key = openssl_pkey_get_private("file://path/to/private_key.pem", "private_key_password");
openssl_sign(json_encode($response), $signature, $private_key, OPENSSL_ALGO_SHA256);

// Add the signature to the response
$response['signature'] = base64_encode($signature);

// Return the response as JSON
header('Content-Type: application/json');
echo json_encode($response);

?>
