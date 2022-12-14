<?php
require_once 'db_connect.php';
require_once 'file_upload.php';

if ($_POST) {    
    $id=$_POST['id'];
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
    $uploadError = '';

    if($image->error===0){
        ($_POST["image"]=="default.jpg")?: unlink("../images/$_POST[image]");    

        $sql="UPDATE library SET title='$title',image='$image->fileName',isbn='$isbn',type='$type',description='$description',author_first_name='$authorFName',author_last_name='$authorLName',publisher_name='$publisherName',publisher_address='$publisherAddress',publish_date='$publishDate',status='$status' where id=$id";
    }else{
         $sql="UPDATE library SET title='$title',isbn='$isbn',type='$type',description='$description',author_first_name='$authorFName',author_last_name='$authorLName',publisher_name='$publisherName',publisher_address='$publisherAddress',publish_date='$publishDate',status='$status' where id=$id";
    }    
    if (mysqli_query($connect, $sql) === TRUE) {
        $class = "success";
        $message = "The record was successfully updated";
        $uploadError = ($image->error !=0)? $image->ErrorMessage :'';
    } else {
        $class = "danger";
        $message = "Error while updating record : <br>" . mysqli_connect_error();
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
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container mt-3">
            
            <div class="alert alert-<?php echo $class;?>" role="alert">
                <p><?php echo ($message) ?? ''; ?></p>
                <p><?php echo ($uploadError) ?? ''; ?></p>
                <a href='../update.php?id=<?=$id;?>'><button class="btn btn-warning" type='button'>Back</button></a>
                <a href='../index.php'><button class="btn btn-success" type='button'>Home</button></a>
            </div>
        </div>
    </body>
</html>