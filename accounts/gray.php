<?php
$id = $_POST["id"];
$password = $_POST["password"];
$realsex = $_POST["realsex"];

if (file_exists("users.json")) {
  $account1file = file_get_contents("users.json");
  $json = json_decode($account1file, true);
  $json[count($json)]["id"] = $id;
  $json[count($json)]["password"] = $password;
  $json[count($json)]["realsex"] = $realsex;
  $encode = json_encode($json)
  $file_put_contents("users.json", $encode);
} else {
  $json[count($json)]["id"] = $id;
  $json[count($json)]["password"] = $password;
  $json[count($json)]["realsex"] = $realsex;
  $encode = json_encode($json);
  $file_put_contents("users.json", $encode);
}
echo <a href="#">www</a>
?>
