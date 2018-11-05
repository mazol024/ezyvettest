
<?php
/**
 * Created by PhpStorm.
 * User: olegmazhanov
 * Date: 05/11/2018
 * Time: 22:01
 */
// ######## please do not alter the following code ########
$products = array(
    array("name" => "Sledgehammer", "price" => 125.75),
    array("name" => "Axe", "price" => 190.50),
    array("name" => "Bandsaw", "price" => 562.13),
    array("name" => "Chisel", "price" => 12.9),
    array("name" => "Hacksaw", "price" => 18.45) );
// ##################################################

class Cart
{
    /*private $itemsNames = Array("Sledgehammer","Axe","Bandsaw","Chisel","Hacksaw");
    private $itemsPrices = Array(125.75,190.50,562.13,12.9,18.45);
    private $items = Array(0,0,0,0,0);*/
    private $itemsNames = [];
    private $itemsPrices = [];
    private $items = [];
    public function addItem($id) {
        $this->items[$id]+=1;
    }
    public function addItems($id,$count) {
        $this->items[$id]+=$count;
    }
    public function getItems($id) {
        return $this->items[$id];
    }
    public function removeProduct($id) {
        $this->items[$id]=0;
    }
    function __construct($productArray) {
        for ($i = 0 ; $i < sizeof($productArray); $i++) {
            $this->items[$i]=0;
            $this->itemsNames[$i] = $productArray[$i]["name"];
            $this->itemsPrices[$i] = $productArray[$i]["price"];
        }
    }
    public function __toString() {
        // TODO: Implement __toString() method.
        $i=0;
        $summ = 0;
        $text = "";
        foreach ($this->itemsNames as $name) {
            if ($this->items[$i] > 0 ){
                $text = $text." Product name: \"".$name."\", price per item: $".$this->itemsPrices[$i].",  quantity: (".$this->items[$i].")<br> Product total:".$this->items[$i]*$this->itemsPrices[$i]."<br>";
                $summ = $summ + round((float)($this->items[$i]*$this->itemsPrices[$i]),2);
            }
            $i++;
        }
        $text = $text."<br><hr> Cart total: $".$summ."<br>";
        return $text;
    }
}
?>