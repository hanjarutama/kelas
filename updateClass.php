<?php
include 'database.php';
$db = new database();

$id = $_GET['id'];
$classname = $_POST['name'];

$update = $db->updateClass($id, $classname);

// Membuat response
if ($update) {
    $response = array(
        'status' => 200,
        'message' => 'Success update a class with id = ' . $id,
        'data' => $update
    );
} else {
    $response = array(
        'status' => 403,
        'message' => 'Failed update a class',
        'data' => ""
    );
}


// Memberitahu respon sebagai json
header('Content-Type: application/json');

// Mengembalikan respon dalam bentuk json
echo json_encode($response);