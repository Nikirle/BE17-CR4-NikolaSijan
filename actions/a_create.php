<?php
require_once './db_connect.php';
require_once './file_upload.php';

if($_POST){
    $title = $_POST['title'];
    $isbn = $_POST['isbn'];
    $type = $_POST['type'];
    $description = $_POST['description'];
    $authorFName = $_POST['first'];
    $authorLName = $_POST['last'];
    $publisherName = $_POST['publisher'];
    $publisherAddress = $_POST['address'];
    $publishDate = $_POST['publishDate'];
    $status = $_POST['status'];
    $image = file_upload($_FILES['image']);

    $sql="INSERT into library (title,image,isbn,type,description,author_first_name,author_last_name,publisher_name,publisher_address,publish_date,status) VALUES('$title','$image->fileName','$isbn','$type','$description','$authorFName','$authorLName','$publisherName','$publisherAddress','$publishDate','$status')";

    if (mysqli_query($connect, $sql) === true) {
        $class = "success";
        $message = "The entry below was successfully created <br>
        <table class='table table-striped table-success'>
  <thead>
    <tr>
      <th scope='col'>Title</th>
      <th scope='col'>ISBN</th>
      <th scope='col'>Type</th>
      <th scope='col'>Description</th>
      <th scope='col'>Author first name</th>
      <th scope='col'>Author last name</th>
      <th scope='col'>Publisher name</th>
      <th scope='col'>Publisher address</th>
      <th scope='col'>Publish date</th>
      <th scope='col'>Status</th>
    </tr>
  </thead>
  <tbody>
  <tr>         
  <td> $title </td>
  <td> $isbn </td>
  <td> $type </td>
  <td> $description </td>
  <td> $authorFName </td>
  <td> $authorLName </td>
  <td> $publisherName</td>
  <td> $publisherAddress </td>
  <td> $publishDate </td>
  <td> $status </td>
  </tr>
  </tbody>
</table>";
        $uploadError = ($image->error !=0)? $image->ErrorMessage :'';
    } else {
        $class = "danger";
        $message = "Error while creating record. Try again: <br>" . $connect->error;
        $uploadError = ($image->error !=0)? $image->ErrorMessage :'';
    }
    mysqli_close($connect);
} else {
    header("location: ../error.php");
}




?>






<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Update</title>
        <?php require_once '../components/boot.php'?>
    </head>
    <body>
        <div class="container">
            <div class="mt-3 mb-3">
                <h1>Create request response</h1>
            </div>
            <div class="alert alert-<?=$class;?>" role="alert">
                <p><?= $message;?></p>
                <p><?= $uploadError;?></p>
                <a href='../index.php'><button class="btn btn-primary" type='button'>Home</button></a>
            </div>
        </div>
    </body>
</html>