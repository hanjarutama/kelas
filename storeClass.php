<?php
include 'database.php';
$db = new database();

// POST = FORM
$classname = $_POST['classname'];

$insert = $db->storeClass($classname);

// Membuat response
if ($insert) {
    $response = array(
        'status' => 200,
        'message' => 'Success create a class',
        'data' => $insert
    );
} else {
    $response = array(
        'status' => 403,
        'message' => 'Failed create a class',
        'data' => ""
    );
}


// Memberitahu respon sebagai json
header('Content-Type: application/json');

// Mengembalikan respon dalam bentuk json
echo json_encode($response);