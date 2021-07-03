<?php include "app.php"; ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row mt-5">
        <div class="col-md-6 m-auto">
            <form method="post" action="app.php" enctype="multipart/form-data">
                <?php include "warning.php"; ?>
                <input type="text" class="form-control mb-3" name="name" placeholder="Name" required>
                <input type="file" class="form-control" name='files[]' multiple required>
                <br>
                <button name="save_zip" type="submit" class="btn btn-primary">Upload</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>