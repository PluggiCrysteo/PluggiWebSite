<?php
include("Identification.php");
$identification->disConnectUser();



header('Location: ../vitrine.php?lang='.$_GET['lang']);

die;
