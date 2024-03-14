<?php include ("php-connection.php");?>
<?php
    $sql_product = "SELECT * FROM products_tab";
    $result_product = $connect->query($sql_product);
    while ($row_product = $result_product->fetch_assoc())
    {
        echo "<img src=".$row_product["product_image"]."/>";
        echo $row_product["product_name"]."<br>";
        echo $row_product["price"]."<br>";
        echo $row_product["description"]."<br>";
    }
?>