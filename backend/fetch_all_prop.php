<?php

include_once 'property.php';
$property = new Properties();
echo json_encode($property->propGet());