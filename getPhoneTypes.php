<?php
include "programManager.php";
include "db_util.php";
include "DTO/PersonDTO.php";
include "DAO/PersonDAO.php";
include "DTO/PhoneDTO.php";
include "DAO/PhoneDAO.php";
include 'DTO/ResultDTO.php';
$progrManager = new programManager();
$progrManager->openConn();
$progrManager->getPhoneTypes();
$progrManager->closeConn();
?>
