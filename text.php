<?php
// include_once 'coon.php';
// // $hostingID = 'host_202408150001';
// $sql = "SELECT property_id FROM property ";
// $result = mysqli_query($conn, $sql);
// if (mysqli_num_rows($result) > 0) {
//     echo '<form action="" method="post" enctype="multipart/form-data">';
//     while ($row = mysqli_fetch_assoc($result)) {
//         echo "Property ID: " . $row['property_id'];
//         ?>
//         <br/><br/>
//         <?php
//     }
// } else {
//     echo "No results found.";
// }

// if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//     if (isset($_FILES['images'])) {
//         $image_names = "";
//         foreach($_FILES['images']['name'] as $imagename){
//             $image_names .= $imagename . ","; 
//         }
//         $image_names = rtrim($image_names, ",");
//         $sql = "update property set property_images = '$image_names' where property_id = '$hostingID' ";
//         $result = mysqli_query($conn, $sql);
//         $result = true;
//         if($result){
//             $directory_path = "upload-images";
//             foreach($_FILES['images']['tmp_name'] as $index => $tmp_name){
//                 $imagename = $_FILES['images']['name'][$index];
//                 $path = $directory_path.'/'.$imagename;
//                 if (move_uploaded_file($tmp_name, $path)) {
//                     echo "File uploaded successfully: $imagename<br>";
//                 } else {
//                     echo "Failed to upload file: $imagename<br>";
//                 }
//             }
//             header("location:http://localhost/project_hotel_managemnt/text.php . ' id =<? 
 //         }else{
//             echo "Failed to update the database";
//         }
//     } else {
//         echo "No files uploaded.";
//     }
// } -->
?>
