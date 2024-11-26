<?php 

try {
    include_once '../config/coon.php';
    if ($conn->connect_error) {
        throw new Exception("Connection failed: " . $conn->connect_error);
    }
    $placeName = $_POST['placename'] ?? '';
    $stdate = $_POST['stdate'] ?? '';
    $enddate = $_POST['enddate'] ?? '';
    $noadult = $_POST['noadult'] ?? 0;
    $nochildren = $_POST['nochild'] ?? 0;
    $nopets = $_POST['nopets'] ?? 0;
    $query = "SELECT * FROM property WHERE 1=1"; 
    if (!empty($placeName)) {
        $query .= " AND locations = '" . mysqli_real_escape_string($conn, $placeName) . "'";
    }  
    if (!empty($stdate) && !empty($enddate)) {
        $query .= " AND available_from <= '" . mysqli_real_escape_string($conn, $stdate) . "' 
                    AND available_to >= '" . mysqli_real_escape_string($conn, $enddate) . "'";
    }
    if ($noadult > 0) {
        $query .= " AND MaxAdult >= " . intval($noadult);
    }
    if ($nochildren > 0) {
        $query .= " AND     MaxChild >= " . intval($nochildren);
    }   
    if ($nopets > 0) {
        $query .= " AND maxPet = ". intval($nopets);
    }
    $result = $conn->query($query);
    $rooms = [];

    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $rooms[] = $row;
        }
    }
    echo json_encode($rooms);
    $conn->close();

} catch (Exception $error) {
    http_response_code(500);
    echo json_encode([
        "error" => true,
        "message" => $error->getMessage()
    ]);
}


