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
        <title>Edit Product</title>
        <?php require_once 'components/boot.php'?>
        <style type= "text/css">
            fieldset {
                margin: auto;
                margin-top: 100px;
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
            <legend class='h2'>Update request <img class='img-thumbnail rounded-circle' src='images/<?php echo $image ?>' alt="<?php echo $name ?>"></legend>
            <form action="actions/a_update.php"  method="post" enctype="multipart/form-data">
                <table class="table">
                <tr>
                        <th>Title</th>
                        <td><input class='form-control' type="text" name="title" value="<?php echo $title ?>" /></td>
                    </tr>    
                    <tr>
                        <th>ISBN</th>
                        <td><input class='form-control' type="text" name= "isbn" value="<?php echo $isbn ?>"  /></td>
                    </tr>
                    <tr>
                        <th>Type</th>
                        <td><input class='form-control' type="text" name= "type" value="<?php echo $type ?>"  /></td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td><textarea name="description"  cols="100" rows="5" ><?php echo $description ?></textarea></td>
                    </tr>
                    <tr>
                        <th>Author First Name</th>
                        <td><input class='form-control' type="text" name= "first" value="<?php echo $authorFName ?>"  /></td>
                    </tr>
                    <tr>
                        <th>Author Last Name</th>
                        <td><input class='form-control' type="text" name= "last" value="<?php echo $authorLName ?>"  /></td>
                    </tr>
                    <tr>
                        <th>Publisher Name</th>
                        <td><input class='form-control' type="text" name= "publisher" value="<?php echo $publisherName ?>"  /></td>
                    </tr>
                    <tr>
                        <th>Publisher Address</th>
                        <td><input class='form-control' type="text" name= "address" value="<?php echo $publisherAddress ?>"  /></td>
                    </tr>
                    <tr>
                        <th>Publish Date</th>
                        <td><input class='form-control' type="date" name= "publishDate" value="<?php echo $publishDate ?>"  /></td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td><select name="status" >
                            <option value="available">available</option>
                            <option value="reserved">reserved</option>

                        </select></td>
                    </tr>
                    <tr>
                        <th>Image</th>
                        <td><input class='form-control' type="file" name="image" /></td>
                    </tr>
                    <tr>
                        <input type= "hidden" name= "id" value= "<?php echo $data['id'] ?>" />
                        <input type= "hidden" name= "image" value= "<?php echo $data['image'] ?>" />
                        <td><button class="btn btn-success" type= "submit">Save Changes</button></td>
                        <td><a href= "index.php"><button class="btn btn-warning" type="button">Back</button></a></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </body>
</html>