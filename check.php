<?php
    $SKU = filter_var(trim($_POST['SKU']), FILTER_SANITIZE_STRING);
    $Name = filter_var(trim($_POST['Name']), FILTER_SANITIZE_STRING);
    $Price = filter_var(trim($_POST['Price']), FILTER_SANITIZE_STRING);
    $Text = filter_var(trim($_POST['Text']), FILTER_SANITIZE_STRING);

    $mysql = new mysqli('localhost', 'root', 'root', 'item_list_mysql');
    $mysql->query("INSERT INTO `item` (`SKU`, `Name`, `Prise`, `Text`) VALUES('$SKU', '$Name', '$Price', '$Text')");

    $mysql->close();

    header("Location: index.php");
?>