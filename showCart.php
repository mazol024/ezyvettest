<?php
session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Basic Shopping Cart</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>

<?php
include ("Cart.php");
$oo = unserialize($_SESSION['mycart']);
?>
    <div id="shopdesk">
<?php
    echo "<h3>Your Shopping Cart:</h3><br>";
    $oo->addItems(0,(int)$_POST["id0"]);
    $oo->addItems(1,(int)$_POST["id1"]);
    $oo->addItems(2,(int)$_POST["id2"]);
    $oo->addItems(3,(int)$_POST["id3"]);
    $oo->addItems(4,(int)$_POST["id4"]);
    echo $oo;
    $_SESSION['mycart'] = serialize($oo);
?>
        <br>
        <hr>
        <button  onclick="window.location.href='index.php';">Add/remove items in cart </button>
</div>
</body>
</html>

