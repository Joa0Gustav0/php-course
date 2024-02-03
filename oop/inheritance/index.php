<?php
require_once './toaster.php';
require_once './toaster-pro.php';
use App\ToasterBasic;
use App\ToasterPro;

$myBasicToaster = new ToasterBasic(3);
$myBasicToaster->insertSlice("Bread");
$myBasicToaster->insertSlice("Bread")->toast();

echo "<br/><br/>";

$myProToaster = new ToasterPro(6);
$myProToaster->insertSlice("Bread");
$myProToaster->insertSlice("Bread");
$myProToaster->insertSlice("Bread");
$myProToaster->insertSlice("Bread");
$myProToaster->insertSlice("Bread");
$myProToaster->insertSlice("Bread");
$myProToaster->toastBagel();