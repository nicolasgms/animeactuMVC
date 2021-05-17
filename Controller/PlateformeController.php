<?php
include_once './Model/PlateformeDAO.php';
$ret = PlateformeDAO::ChargePlatform();

include "./View/baseView.php";
include "./View/PlateformeView.php";
include "./View/footView.php";

