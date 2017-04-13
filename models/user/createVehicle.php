<?php
include_once('config.php');
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

$owner =1;

// $prix = isset($_POST['Prix']);
// $couleur = isset($_POST['Couleur']);
// $carburant = isset($_POST['Carburant']);

$prix = $_POST['Prix'];
$couleur = $_POST['Couleur'];
$carburant = $_POST['Carburant'];


echo $prix.$couleur.$carburant;
// INSERT INTO `vehicle` (`id`, `price`, `color`, `available`, `user_id`, `model_id`, `address_id`, `fuel`, `status`, `description`, `places`) VALUES (NULL, '800.00', 'ROUGE', '1', '1', '8', '2', 'DIESEL', 'BON ETAT', 'dkkdedkdkd', '2');// list vehicle for this user
$q = "INSERT INTO vehicle (`price`, `color`, `available`, `user_id`, `model_id`, `address_id`, `fuel`, `status`, `description`,`places`)
      VALUES( '".$prix."' , '".$couleur."', '1', '".$owner."', '7','1', '".$carburant."', 'bon', 'jjj', '1' )";
if (query($q)) {
echo "string";
};

echo "<br>";
echo $q;
