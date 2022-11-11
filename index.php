<?php
require_once './actions/db_connect.php';

$sql = "SELECT * FROM library";
$result =mysqli_query($connect,$sql);   
$tbody ="";
if(mysqli_num_rows($result)>0){
    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){         
        $tbody .= "<tr>
            <td><img class='img' src='images/" .$row['image']."'</td>
            <td>" .$row['title']."</td>
            <td>" .$row['isbn']."</td>
            <td>" .$row['type']."</td>
            <td>" .$row['description']."</td>
            <td>" .$row['author_first_name']."</td>
            <td>" .$row['author_last_name']."</td>
            <td>" .$row['publisher_name']."</td>
            <td>" .$row['publisher_address']."</td>
            <td>" .$row['publish_date']."</td>
            <td>" .$row['status']."</td>

            <td><a href='update.php?id=" .$row['id']."'><button class='btn btn-primary btn-sm' type='button'>Edit</button></a>
            <a href='delete.php?id=" .$row['id']."'><button class='btn btn-danger btn-sm' type='button'>Delete</button></a></td>
            </tr>";
    };
} else {
    $tbody =  "<tr><td colspan='5'><center>No Data Available </center></td></tr>";
}


mysqli_close($connect); 
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
    <link rel="stylesheet" href="style.css">
    <?php require_once './components/boot.php' ?>
</head>
<body>
    <h1 class="h1">Big Library</h1>
    <div class="margin">
    <div class='mb-3'>
                <a href= "create.php"><button class='btn btn-primary'type="button" >Add Item</button></a>
            </div>
    <table class="table table-striped table-success">
  <thead>
    <tr>
    <th scope="col">Image</th>
      <th scope="col">Title</th>
      <th scope="col">ISBN</th>
      <th scope="col">Type</th>
      <th scope="col">Description</th>
      <th scope="col">Author first name</th>
      <th scope="col">Author last name</th>
      <th scope="col">Publisher name</th>
      <th scope="col">Publisher address</th>
      <th scope="col">Publish date</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>
    
    </tr>
  </thead>
  <tbody>
    <?= $tbody?>
  </tbody>
</table>
    </div>
</body>
</html>