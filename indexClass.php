<?php
include 'database.php';
$db = new database();

// Mengambil data
$data = $db->getAllClass();

for ($i = 0; $i < count($data); $i++) {
    $student = $db->getStudentWithClass($data[$i]['id_class']);
    $data[$i]['student'] = $student;
}
// Membuat response

$response = array(
    'status' => 200,
    'message' => 'Success get all class',
    'data' => $data
);

// Memberitahu respon sebagai json
header('Content-Type: application/json');

// Mengembalikan respon dalam bentuk json
echo json_encode($response);