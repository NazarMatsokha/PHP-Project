<?php
    session_start(); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>PHP Web Site</title>
</head>
<body>
    <?php require "blocks/header.php" ?>
    <div class="container mt-5">
        <h3 class="mb-5">Main page</h3>
        <?php
            if(isset($_SESSION['status']))
            {
                echo "<h4>".$_SESSION['status']."</h4>";
                unset($_SESSION['status']);
            }
        ?>
        <form action="delete.php" method="POST">
        <div class="d-flex flex-wrap">
            <?php
            $mysql = new mysqli("localhost", "root", "root","item_list_mysql");
            $mysql->query("SET NAMES 'utf-8'");


            $result = $mysql->query("SELECT * FROM `item`");
            if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    ?>
                    <div class="card mb-4 shadow-sm" style="width:25%;height:20%;">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal"><?php echo $row['Name'] ?></h4>
                            <input style="" type="checkbox" name="item_delete_id[]" value="<?= $row['SKU']; ?>">
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title">$<?php echo $row['Prise'] ?></h1>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li><?php echo $row['SKU'] ?></li>
                                <li><?php echo $row['Text'] ?></li>
                            </ul>
                        </div>
                    </div>
                    <?php
                }
            }

            $mysql->close();
            ?>
        </div>
            <button type="submit" name="delete_multiples_id`s" class="btn btn-danger">Delete</button>
        </form>
    </div>
    <div>

    </div>
</body>
</html>
