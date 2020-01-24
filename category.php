<?php
$id=isset($_GET['id'])?$_GET['id']: 0;
require 'includes/function.php';

$categorie =findCategory($id);
if (false===$categorie){
    exit('Category introuvable');
}
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" crossorigin="anonymous">

    <title>Category title</title>
</head>
<body>
<div class="container">
    <!-- Category title -->
    <h2>Categorie <?php echo $id?></h2>
    <!-- Category long desc -->
    <div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in metus et metus varius convallis in id ligula.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in metus et metus varius convallis in id ligula.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in metus et metus varius convallis in id ligula.</p>
    </div>
    <hr>
    <!-- Category's products list -->
    <div>
        <!-- Product title -->
        <h2>Product <?php echo $categorie['id'];?></h2>
        <!-- Product short desc -->
        <?php echo $categorie['long_desc'];?>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce in metus et metus varius convallis in id ligula.</p>
        <p>
            <strong>In stock</strong>
            <strong>99,99 €</strong>
            <!-- Link to category detail -->
            <a href="product.html" class="btn btn-sm btn-primary pull-right">Read more</a>
        </p>
    </div>
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