<?php
require 'userClass.php';
require 'connection.php';

$user=new User(null,"","","","","","");

if(isset($_POST['save'])){
    $user->nom=$_POST['nom'];
    $user->prenom=$_POST['prenom'];
    $user->email=$_POST['email'];
    $user->password=$_POST['password'];
    $user->telephone=$_POST['telephone'];
    $id=$_POST["id"];
    $role=$_POST["role"];
    $user->update($conn,$id);
    header("Location: dashboard.php");


}
?>