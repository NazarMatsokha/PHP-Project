<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <title>Add item page</title>
    <?php require "blocks/header.php" ?>
</head>
<body>
    <h1>Item add form</h1>
    <div class="container" style="margin-top:1%;">
        <form action="check.php" method="POST">
            <input style="margin-top:1%; type="text" class="form-control" name="SKU" id="SKU" placeholder="Type SKU number">
            <input style="margin-top:1%; type="text" class="form-control" name="Name" id="Name" placeholder="Type Name">
            <input style="margin-top:1%; type="text" class="form-control" name="Price" id="Price" placeholder="Type Price">
            <input style="margin-top:1%;"  type="text" class="form-control" name="Text" id="Text" placeholder="Type Text">
            <button style="margin-top:1%; type="submit" class="btn btn-success">Apply</button>
        </form>
    </div>
</body>
</html>
