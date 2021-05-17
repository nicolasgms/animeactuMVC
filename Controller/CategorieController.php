<?php
include_once './Model/CategorieDAO.php';

$ret = CategorieDAO::ChargeCategorie();

include "./View/baseView.php";
include "./View/CategorieView.php";
include "./View/footView.php";

