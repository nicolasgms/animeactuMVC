<?php
include_once './Model/AnimeDAO.php';
include_once './Model/CategorieDAO.php';

if (isset($_GET["id_categorie"])) {
    $id_categorie = $_GET["id_categorie"];
} 

$categorie = CategorieDAO::ChargeCategorieId($id_categorie);
$anime = AnimeDAO::ChargeAnimeCategorie($id_categorie);
include "./View/baseView.php";
include "./View/FicheCategorieView.php";
include "./View/footView.php";