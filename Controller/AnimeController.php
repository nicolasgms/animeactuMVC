<?php
include_once './model/AnimeDAO.php';
$unAnime = AnimeDAO::ChargeAnime();

include "./View/baseView.php";
include "./View/AnimeView.php";
include "./View/footView.php";
