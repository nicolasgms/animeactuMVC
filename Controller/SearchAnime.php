<?php
include_once './model/AnimeDAO.php';
if (isset($_POST["titre"])){
    $titre=$_POST["titre"];
    $ret = AnimeDAO::SearchAnimeBytitre($titre);
}

include "./View/baseView.php";
include "./View/AnimeView.php";
include "./View/footView.php";
