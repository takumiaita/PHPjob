<?php
define("TAX",0.1);
$products = ["鉛筆" => 100, "消しゴム" => 150, "物差し" => 500];

function getTaxprice($price) {
    $taxprice = $price * (1+TAX);
    return $taxprice;
}

foreach ($products as $key => $value) {
    echo $key."の税込み価格は".getTaxprice($value)."円です";
    echo "<br>";
}
?>