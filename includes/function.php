<?php
/* trouver une catégorie par son identifiant 
@param int $id est l'identifiant de la catégorie
@return array la catégorie (sous forme de tableau) et retourne faux si c'est pas la bonne id
*/

require 'data.php';

function findCategory($id){
    global $categories;
    foreach ($categories as $categorie){
        if ($id==$categorie['id']){
            return $categorie;
        }
    }
    return false;
}

function getBrandById($id){
    global $brands ;
    foreach( $brands as $brand ){
        if ($brand['id']==$id){
        return $brand;
        }
    }
    return false;
}
function getProductById($id){
    global $products;
    foreach($products as $product){
        if ($product['id']==$id){
            return$product;
        }
    }
    return false;
}


?>