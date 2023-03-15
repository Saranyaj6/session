<?php


$name = $_POST['fname'];
$address = $_POST['email'];
$phone = $_POST['phone'];
$img = $_FILES['img1']['name'];
$temp_name = $_FILES['img1']['tmp_name'];

$existingData = file_get_contents('data.json');
$existingArray = json_decode($existingData, true);

$data = [
  'name' => $name,
  'address' => $address,
  'phoneNumber' => $phone,
  'imageURL' => $img
];

move_uploaded_file($temp_name, 'uploads/' . $img);
$existingArray[] = $data;

$jsonData = json_encode($existingArray);

file_put_contents('data.json', $jsonData);
echo $jsonData;

?>