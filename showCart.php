<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Basic Shopping Cart</title>
    <link rel="stylesheet" href="main.css">
    <script src="jquery/jquery-3.3.1.min.js"></script>
</head>
<body>

<?php
session_start();
include ("Cart.php");
$oo = unserialize($_SESSION['mycart']);
/**
 * Created by PhpStorm.
 * User: olegmazhanov
 * Date: 05/11/2018
 * Time: 20:05
 */

?>
    <div id="shopdesk">
<?php

    $oo->addItems(0,(int)$_POST["id0"]);
    $oo->addItems(1,(int)$_POST["id1"]);
    $oo->addItems(2,(int)$_POST["id2"]);
    $oo->addItems(3,(int)$_POST["id3"]);
    $oo->addItems(4,(int)$_POST["id4"]);
    echo $oo;
 /*   $oo = new Cart;
    $oo->addItem(3);
    $oo->addItem(1);$oo->addItem(1);$oo->addItem(1);
    echo  $oo;*/
    $_SESSION['mycart'] = serialize($oo);
?>
        <button  onclick="window.location.href='index.php';">Continue shopping </button>
</div>
</body>
</html>

