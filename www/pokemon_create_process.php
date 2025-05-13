<?php
require 'database_connection.php';
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo "invalid request method";
    exit;
}





// name
$name = $_POST['name'];
if (empty($name)) {
    echo "name is required";
    exit;
}
if (strlen($name) > 20) {
    echo "name is too long";
    exit;
}
if (!isset($_POST['name'])) {
    echo "Name field is required";
    exit;
}
// type
$type = $_POST['type'];
if (empty($type)) {
    echo "type is required";
    exit;
}
if (strlen($type) > 20) {
    echo "type is too long";
    exit;
}
if (!isset($_POST['type'])) {
    echo "type field is required";
    exit;
}
// description
$description = $_POST['description'];
if (!isset($_POST['description'])) {
    echo "description field is required";
    exit;
}
// image
$image = $_POST['image'];
if (empty($image)) {
    echo "image is required";
    exit;
}
if (strlen($image) >= 255) {
    echo "image is too long";
    exit;
}
if (!filter_var($image, FILTER_VALIDATE_URL)) {
    echo "Invalid image URL";
    exit;
}
if (!isset($_POST['image'])) {
    echo "image field is required";
    exit;
}
// height
$height = $_POST['height'];
if (!isset($_POST['height'])) {
    echo "height field is required";
    exit;
}
// weight
$weight = $_POST['weight'];
if (!isset($_POST['weight'])) {
    echo "weight field is required";
    exit;
}
// abilities
$abilities = $_POST['abilities'];
if (!isset($_POST['abilities'])) {
    echo "abilities field is required";
    exit;
}
//evolution_stage
$evolution_stage = $_POST['evolution_stage'];
if (!isset($_POST['evolution_stage'])) {
    echo "evolution_stage field is required";
    exit;
}
// hp
$hp = $_POST['hp'];
if (!filter_var($hp, FILTER_VALIDATE_INT) || $hp > 800) {
    echo "Invalid or too low HP value";
    exit;
}
if (!isset($_POST['hp'])) {
    echo "hp field is required";
    exit;
}
// attack
$attack = $_POST['attack'];
if (!filter_var($attack, FILTER_VALIDATE_INT) || $attack > 800) {
    echo "Invalid  attack value";
    exit;
}
if (!isset($_POST['attack'])) {
    echo "attack field is required";
    exit;
}
// defense
$defense = $_POST['defense'];
if (!filter_var($defense, FILTER_VALIDATE_INT) || $defense > 800) {
    echo "Invalid  defense value";
    exit;
}
if (!isset($_POST['defense'])) {
    echo "defense field is required";
    exit;
}
$sql = "INSERT INTO cards (name, type, description, image, height, weight, abilities, evolution_stage, hp, attack, defense) 
        VALUES ('$name','$type', '$description', '$image', '$height', '$weight', '$abilities', '$evolution_stage',
                '$hp', '$attack', '$defense')";


if (mysqli_query($conn, $sql)) {
    echo "New record created successfull";
}
