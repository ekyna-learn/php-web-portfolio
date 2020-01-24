<?php

require 'includes/function.php';
$id = isset($_GET['id']) ? $_GET['id'] : 0;
// Sélection la marque d'après la valeur de $id

$brand=getBrandById($id);
if (getBrandById($id)==false){
    exit("TU PEUX PAS ME HACKER PETIT MALINOIS");
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
    <title>brand title</title>
</head>
<body>
<div class="container">
    <!-- Brand title -->
    <h2>Brand <?php echo $brand['title']; ?></h2>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" crossorigin="anonymous"></script>
</body>
</html>