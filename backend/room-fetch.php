<?php
try {
    include '../config/coon.php';
    $placeName = $_POST['placename'] ?? '';
    $stdate = $_POST['stdate'] ?? '';
    $enddate = $_POST['enddate'] ?? '';
    $noadult = $_POST['noadult'] ?? 0;
    $nochildren = $_POST['nochild'] ?? 0;
    $nopets = $_POST['nopets'] ?? 0;
    $placeType = $_POST['placeType'] ?? '';
    $minPrice = $_POST['minPrice'] ?? 0;
    $maxPrice = $_POST['Maxprice'] ?? 0;
    $badroom = $_POST['badroom'] ?? 0;
    $beds = $_POST['beds'] ?? 0;
    $bathroom = $_POST['bathroom'] ?? 0;
    $propertyType = $_POST['propertyTtpe'] ?? '';
    $query = "SELECT p.*, ps.HasBadroom, ps.HasBeds, ps.HasBathroom 
              FROM property p 
              LEFT JOIN property_specification ps ON p.Property_id = ps.Property_id 
              WHERE 1=1";

    $params = [];
    $types = '';
    if (!empty($placeName)) {
        $query .= " AND p.locations = ?";
        $params[] = $placeName;
        $types .= 's';
    }

    if (!empty($stdate) && !empty($enddate)) {
        $query .= " AND p.available_from <= ? AND p.available_to >= ?";
        $params[] = $stdate;
        $params[] = $enddate;
        $types .= 'ss';
    }

    if ($noadult > 0) {
        $query .= " AND p.MaxAdult >= ?";
        $params[] = $noadult;
        $types .= 'i';
    }

    if ($nochildren > 0) {
        $query .= " AND p.MaxChild >= ?";
        $params[] = $nochildren;
        $types .= 'i';
    }

    if ($nopets > 0) {
        $query .= " AND p.maxPet = ?";
        $params[] = $nopets;
        $types .= 'i';
    }

    if (!empty($placeType)) {
        $query .= " AND p.place_type = ?";
        $params[] = $placeType;
        $types .= 's';
    }

    if ($minPrice > 0) {
        $query .= " AND p.price >= ?";
        $params[] = $minPrice;
        $types .= 'i';
    }

    if ($maxPrice > 0) {
        $query .= " AND p.price <= ?";
        $params[] = $maxPrice;
        $types .= 'i';
    }

    if ($badroom > 0) {
        $query .= " AND ps.HasBadroom >= ?";
        $params[] = $badroom;
        $types .= 'i';
    }

    if ($beds > 0) {
        $query .= " AND ps.HasBeds >= ?";
        $params[] = $beds;
        $types .= 'i';
    }

    if ($bathroom > 0) {
        $query .= " AND ps.HasBathroom >= ?";
        $params[] = $bathroom;
        $types .= 'i';
    }

    if (!empty($propertyType)) {
        $query .= " AND p.property_type = ?";
        $params[] = $propertyType;
        $types .= 's';
    }
    $stmt = $conn->prepare($query);
    if (!empty($params)) {
        $stmt->bind_param($types, ...$params);
    }
    $stmt->execute();
    $result = $stmt->get_result();
    $rooms = [];
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $rooms[] = $row;
        }
    }
    echo json_encode($rooms);
    $stmt->close();
    $conn->close();
} catch (Exception $error) {
    http_response_code(500);
    echo json_encode([
        "error" => true,
        "message" => "An error occurred while fetching rooms."
    ]);
}
?>
