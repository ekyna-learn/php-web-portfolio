<?php
require 'includes/data.php';
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" crossorigin="anonymous">

    <title>Catalog</title>
</head>
<body>
<div class="container">
    <h1><?php echo date('d/m/y H:i:s');?></h1>
    <p> Nombres de catégories: <?php echo count($categories);?></p>
    <hr>
    <!-- Categories list -->
    <?php foreach ($categories as $category){?>
    <div>
        <!-- Category title -->
        <h2><?php echo $category['title']?></h2>
        <!-- Category short desc -->
        <p><?php echo $category['short_desc']?></p>
        <p>
            <!-- Link to category detail -->
            <a href="category.php?id=<?php echo $category['id']?>">Voir les produits</a>
        </p>
    </div>
    <?php } ?>
    <hr>
    <!-- Other categories -->
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>