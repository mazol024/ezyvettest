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
<script>
    function addItem(item) {
        <?php ?>
    }
</script>
<?php
include ("Cart.php");
$temp1 = 0;
?>
    <div id="shopdesk">
        <form id="shopform" method="post" action="showCart.php">
            <?php
           if (($_SESSION['created']) == false ) {
               $oo = new Cart($products);
              $_SESSION['created']=true;
              $_SESSION['mycart'] = serialize($oo);
            }
            $oo = unserialize($_SESSION['mycart']);
            echo "<h3>Current Products:</h3>";
            for ($i = 0; $i < sizeof($products); $i++) {
                echo "Product name: " . $products[$i]["name"] . ",  price per item: $" . $products[$i]["price"];
                echo "<br><label for=\"id$i\"> in your cart:</label> ";
                $howmany = $oo->getItems($i);
                $oo->removeProduct($i);
                echo "<input type='text' name=\"id$i\" id=\"id$i\" value=\"$howmany\" size='2' onclick=\"this.value = parseInt(this.value)+1;
                 \"> ";
                echo "<br>";
            }
            ?>
            <br><hr>
            <input  type="submit" value="Check Out" onclick="<?php $_SESSION['mycart'] = serialize($oo);?>">
        </form>
    </div>
</body>
</html>