<?php
include 'database.php';
$db = new database();

$id = $_GET['id'];
// POST = FORM
$name = $_POST['name'];
$gender = $_POST['gender'];
$classId = $_POST['id_class'];

$update = $db->update($id, $name, $gender, $classId);

// Membuat response
if ($update) {
    $response = array(
        'status' => 200,
        'message' => 'Success update a student with id = ' . $id,
        'data' => $update
    );
} else {
    $response = array(
        'status' => 403,
        'message' => 'Failed update a student',
        'data' => ""
    );
}


// Memberitahu respon sebagai json
header('Content-Type: application/json');

// Mengembalikan respon dalam bentuk json
echo json_encode($response);