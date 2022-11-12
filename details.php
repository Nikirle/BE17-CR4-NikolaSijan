<?php
require_once 'actions/db_connect.php';

if ($_GET['id']) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM library WHERE id = {$id}";
    $result = mysqli_query($connect, $sql);
    if (mysqli_num_rows($result) == 1) {
        $data = mysqli_fetch_assoc($result);
        $title = $data['title'];
        $isbn = $data['isbn'];
        $type = $data['type'];
        $description = $data['description'];
        $authorFName = $data['author_first_name'];
        $authorLName = $data['author_last_name'];
        $publisherName = $data['publisher_name'];
        $publisherAddress = $data['publisher_address'];
        $publishDate = $data['publish_date'];
        $status = $data['status'];
        $image = $data['image'];
    } else {
        header("location: error.php");
    }
    mysqli_close($connect);
} else {
    header("location: error.php");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Details</title>
        <?php require_once 'components/boot.php'?>
        <link rel="stylesheet" href="style.css">
        <style type= "text/css">
            fieldset {
                margin: auto;
                margin-top: 50px;
                width: 60% ;
            }  
            .img-thumbnail{
                width: 70px !important;
                height: 70px !important;
            }     
        </style>
    </head>
    <body>
        <fieldset>
            <legend class='h2'>Details<img class='img-thumbnail rounded-circle' src='images/<?php echo $image ?>' alt="<?php echo $name ?>"></legend>
            <form action="details.php"  method="post" enctype="multipart/form-data">
                <table class="table">
                <tr>
                        <th>Title</th>
                        <td><?=$title ?></td>
                    </tr>    
                    <tr>
                        <th>ISBN</th>
                        <td><?=$isbn?>  </td>
                    </tr>
                    <tr>
                        <th>Type</th>
                        <td><?=$type?> </td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td><?=$description ?></td>
                    </tr>
                    <tr>
                        <th>Author First Name</th>
                        <td><?=$authorFName ?></td>
                    </tr>
                    <tr>
                        <th>Author Last Name</th>
                        <td><?=$authorLName?>  </td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td><?=$status ?></td>
                    </tr>
                    <tr> 
                        <td><a href= "index.php"><button class="btn btn-warning" type="button">Back</button></a></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </body>
</html>