
<?php
//header('Content-type:application/json; charset=utf-8');
include "programManager.php";
include "db_util.php";
include "DTO/PersonDTO.php";
include "DAO/PersonDAO.php";
include "DTO/PhoneDTO.php";
include "DAO/PhoneDAO.php";
include "DAO/AddressDAO.php";
include "DTO/AddressDTO.php";
include "DAO/StateDAO.php";
include "DTO/StateDTO.php";
include 'DTO/ResultDTO.php';
$person_id_list = $_GET['deleteId'];
$person_id = explode(',', $person_id_list);
$progrManager = new programManager();
$progrManager->deletePerson($person_id);
?>
