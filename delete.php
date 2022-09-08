<?php
    session_start();
    $con = mysqli_connect('localhost', 'root', 'root', 'item_list_mysql');

    if(isset($_POST['delete_multiples_id`s']))
    {
        $all_id = $_POST['item_delete_id'];
        $extract_id = implode(',', $all_id);
        //echo $extract_id;
        $query =  "DELETE FROM item WHERE SKU IN($extract_id)";
        $query_run =  mysqli_query($con, $query);

        if($query_run)
        {
            $_SESSION['status'] = "Data deleted successfully";
            header("Location: index.php");
        }
        else
        {
            $_SESSION['status'] = "Data not deleted";
            header("Location: index.php");
        }
    }