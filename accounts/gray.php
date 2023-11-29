<?php
$id = $_POST["id"];
$password = $_POST["password"];
$realsex = $_POST["realsex"];

if (file
_exists("users.json")) {
  $account1file = file
_get
_contents("users.json");
  $json = json
_decode($account1file, true);
  $json[count($json)]["id"] = $id;
  $json[count($json)]["password"] = $password;
  $json[count($json)]["realsex"] = $realsex;