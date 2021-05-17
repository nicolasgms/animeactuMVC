<?php
include_once './Model/AnimeDAO.php';

if (isset($_GET["code_anime"])) {
    $code_anime = $_GET["code_anime"];
}

$unAnime = AnimeDAO::ChargeAnimeCode($code_anime);
include "./View/baseView.php";
include "./View/FicheAnimeView.php";
include "./View/TestimonialView.php";
include "./View/footView.php";

