<?php 
$user="root";
$password="";
$pdo=new PDO('mysql:host=localhost;dbname=products',$user,$password);
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$id = $_POST["id"] ?? null;
if(!$id){
    header('location: products.php');
    exit;

}
$adding =$pdo->prepare('DELETE FROM storeme WHERE id = :id ');
$adding->bindValue(':id',$id);
$adding->execute();

header('location: products.php'); 
?>