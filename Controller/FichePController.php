<?php
include_once './Model/AnimeDAO.php';
include_once './Model/PlateformeDAO.php';

if (isset($_GET["id_plateforme"])) {
    $id_plateforme = $_GET["id_plateforme"];
} 

$plateforme = PlateformeDAO::ChargePlatformById($id_plateforme);
$anime = AnimeDAO::ChargeAnimePlateforme($id_plateforme);
include "./View/baseView.php";
include "./View/FichePlateformeView.php";
include "./View/footView.php";