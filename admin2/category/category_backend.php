<?php 
require "../../connect.php";
function add_category ($connect , $category_name , $category_image){
    $sql_insert_category = "INSERT INTO categories (category_name , category_image) VALUES (:name , :image)
    
    ";

    $stat = $connect->prepare($sql_insert_category);
    $stat->execute([
        ':name'=>$category_name, 
        ':image'=>$category_image
    ]);
}

function select_category($connect){
    $sql_select = "SELECT * FROM categories";
    $stat = $connect->query($sql_select);
    $row = $stat->fetchAll(PDO::FETCH_ASSOC);

    return $row;
}

function select_one_category($connect ,$id){
    $sql_select = "SELECT * FROM categories WHERE category_id = '$id'" ;
    $stat = $connect->query($sql_select);
    $row = $stat->fetch(PDO::FETCH_ASSOC);

    return $row;
}


function update_category($connect ,$name ,$image, $id){
    $sql_update = "UPDATE categories SET category_name=:name,category_image=:image WHERE category_id = '$id'";
    $stat = $connect->prepare($sql_update);
    $stat->execute([
        ":name"=>$name,
        ":image"=>$image
    ]);
}

function delete_category($connect , $id){
    $sql_delete = "DELETE FROM categories WHERE category_id = :id";
    $stat = $connect->prepare($sql_delete);
    $stat->execute([
        ":id"=>$id
    ]);
}

?>