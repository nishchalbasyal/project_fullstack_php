<?php

include "../connection.php";


header("Content-Type: application/json");

$method = $_SERVER['REQUEST_METHOD'];
$input = json_decode(file_get_contents('php://input'), true);
$conn = connectDB();

switch ($method) {
    case 'GET':
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $result = $conn->query("SELECT * FROM task WHERE t_id=$id");
            $data = $result->fetch_assoc();
            echo json_encode($data);
        } else {
            $result = $conn->query("SELECT * FROM task");
            $task = [];
            while ($row = $result->fetch_assoc()) {
                $task[] = $row;
            }
            echo json_encode($task);
        }
        break;

    case 'POST':
        $t_name = $input['t_name'];
        $t_details = $input['t_details'];
        $t_status = $input['t_status'];
        $stmt = $conn->prepare("INSERT INTO task (t_name, t_details, t_status) VALUES (?, ?, ?)");
        $stmt->bind_param("ssi", $t_name, $t_details, $t_status);
        $stmt->execute();
        echo json_encode(["messt_status" => "Task added successfully"]);
        break;

    case 'PUT':
        $id = $_GET['id'];
        // $t_name = $input['t_name'];
        // $t_details = $input['t_details'];
        $t_status = $input['t_status'];
        $conn->query("UPDATE task SET t_status=$t_status WHERE t_id=$id");
        echo json_encode(["messt_status" => "Task updated successfully"]);
        break;

    case 'DELETE':
        $id = $_GET['id'];
        $conn->query("DELETE FROM task WHERE t_id=$id");
        echo json_encode(["messt_status" => "Task deleted successfully"]);
        break;

    default:
        echo json_encode(["messt_status" => "Invalid request method"]);
        break;
}



$conn->close();
