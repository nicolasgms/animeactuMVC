<?php
include_once "./Model/authentification.php";
include_once "./Model/UserDAO.php";

$ret = UserDAO::ChargeUser();

include './View/baseView.php';
include './View/ProfilView.php';
include './View/footView.php';