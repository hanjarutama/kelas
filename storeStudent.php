<?php
include 'database.php';
$db = new database();

// POST = FORM
$name = $_POST['name'];
$gender = $_POST['gender'];
$classId = $_POST['id_class'];

$insert = $db->store($name, $gender, $classId);

// Membuat response
if ($insert) {
    $response = array(
        'status' => 200,
        'message' => 'Success create a student',
        'data' => $insert
    );
} else {
    $response = array(
        'status' => 403,
        'message' => 'Failed create a student',
        'data' => ""
    );
}


// Memberitahu respon sebagai json
header('Content-Type: application/json');

// Mengembalikan respon dalam bentuk json
echo json_encode($response);