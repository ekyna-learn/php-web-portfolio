<?php

require 'includes/function.php';
$id = isset($_GET['id']) ? $_GET['id'] : 0;

$product=getProductById($id);
$brand=getBrandById($product['brand']);
$category=findCategory($product['category']);
if ($product==false){
    exit('Hop hop hop on ne passe pas');
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

    <title>Product title</title>
</head>
<body>
<div class="container">
    <a href="brand.php?id=<?php echo $brand['id']?>" >Brand :<?php echo $brand['title']?> </a>
    <a href="category.php?id=<?php echo $category['id']?>"> Category:<?php echo $category['title']?> </a>


    <h1>Product <?php echo $product['title']; ?></h1>
    <div class="row">
        <div class="col-md-6">
            <img src="http://placeimg.com/570/340/tech"
                 style="width:100%; height: auto;">
        </div>
        <div class="col-md-6">
            <p>Product <?php $product['short_desc'] ?></p>
            <table class="table">
                <tr>
                    <th>Price</th>
                    <td><?php echo $product['price']?>€</td>
                </tr>
                <tr>
                    <th>Availability</th>
                    <td><?php echo $product['stock']?></td>
                </tr>
                <tr>
                    <th>Released at</th>
                    <td>2020-01-01</td>
                </tr>
            </table>
            <p class="text-center">
                <a href="javascript: void(0)" class="btn btn-primary">
                    Add to cart
                </a>
            </p>
        </div>
    </div>
    <hr>
    <!-- Product long desc -->
    <div>
        <p><?php $product['long_desc']?></p>
        
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>