<?php
session_start();

if (isset($_POST['upload-hosing'])) {
    $errors = [];
    $propertyID = trim($_POST['property_id']);
    $propertyType = trim($_POST['propertyType']);
    $propertyPrice = (float) trim($_POST['propertyPrice']);
    $propertyStatus = ($_POST['property_status'] === "Available") ? 1 : 0;
    $propertyLocation = trim($_POST['propertyLocation']);
    $maxGuests = (int) trim($_POST['maxGuests']);
    $propertyTitle = trim($_POST['propertyTitle']);
    $description = trim($_POST['description']);
    $amenities = $_POST['amenities'] ?? [];
    $allAmenities = [
        'HasKitchen' => 0,
        'HasAC' => 0,
        'HasWiFi' => 0,
        'HasParking' => 0,
        'HasDryer' => 0,
        'AllowsPets' => 0,
        'HasPool' => 0,
        'HasGym' => 0,
        'HasBalcony' => 0,
        'HasGarden' => 0,
        'HasFireplace' => 0,
        'HasHotTub' => 0,
        'HasBBQ' => 0,
        'IsSmokeFree' => 0,
        'HasElevator' => 0
    ];
    foreach ($amenities as $amenity) {
        if (array_key_exists($amenity, $allAmenities)) {
            $allAmenities[$amenity] = 1;
        }
    }
    $uploadedImageNames = [];
    if (isset($_FILES['propertyImages']) && !empty($_FILES['propertyImages']['name'][0])) {
        foreach ($_FILES['propertyImages']['name'] as $index => $imageName) {
            $tmp_name = $_FILES['propertyImages']['tmp_name'][$index];
            $destination = '../../upload-images/' . $imageName;
            if (move_uploaded_file($tmp_name, $destination)) {
                $uploadedImageNames[] = $imageName;
            } else {
                $errors[] = "Failed to upload image: $imageName";
            }
        }
    } else {
        $errors[] = "At least one property image is required.";
    }

    if (empty($errors)) {
        include '../../coon.php';
        if (!$conn) {
            die("Database connection failed: " . mysqli_connect_error());
        }
        $propertyImagesString = implode(',', $uploadedImageNames);
        echo "<pre>";
        print_r($uploadedImageNames);
        echo "</pre>";
        echo $propertyImagesString;
        $sql = "INSERT INTO property (Property_id, Property_type, price, availability, location, Hostid, Title, Description, MaxGuests, property_images)  
                VALUES ('$propertyID', '$propertyType', $propertyPrice, $propertyStatus, '$propertyLocation', {$_SESSION['user']['user_id']}, '$propertyTitle', '$description', $maxGuests,' $propertyImagesString')";
        $result = mysqli_query($conn, $sql);
        $sql = "INSERT INTO property_specification (
            property_id, HasKitchen, HasAC, HasWiFi, HasParking, HasDryer, AllowsPets, HasPool, HasGym, HasBalcony, HasGarden, HasFireplace, HasHotTub, HasBBQ, IsSmokeFree, HasElevator
        ) VALUES ( '$propertyID', {$allAmenities['HasKitchen']}, {$allAmenities['HasAC']}, {$allAmenities['HasWiFi']}, {$allAmenities['HasParking']},
         {$allAmenities['HasDryer']},{$allAmenities['AllowsPets']}, {$allAmenities['HasPool']}, {$allAmenities['HasGym']}, {$allAmenities['HasBalcony']}, 
         {$allAmenities['HasGarden']}, {$allAmenities['HasFireplace']},{$allAmenities['HasHotTub']}, {$allAmenities['HasBBQ']}, {$allAmenities['IsSmokeFree']}, 
         {$allAmenities['HasElevator']})";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
    }
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<li>$error</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Property and specifications successfully saved!</p>";
        header("Location: http://localhost/project_hotel_managemnt/home/profile/profile.php");
    }
}
