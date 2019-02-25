<?php
//get
//bitbucket.com
//github.com

if (isset($_GET["id"]))
{
    $conn = mysqli_connect("localhost", "root", "", "wafanyakazi");
    extract($_GET);
    $sql ="delete from employees where id=$id";
    mysqli_query($conn,$sql);
}
header("location:fetch.php");
//git init
//git add .
//git commit -m "php basic files"
//clear
//git config user.name "Alpheaus"
//git config user.email "kabugialpheaus@gmail.com"

