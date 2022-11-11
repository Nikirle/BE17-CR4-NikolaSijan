<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php require_once 'components/boot.php'?>
        <title>Add product</title>
        <style>
            fieldset {
                margin: auto;
                margin-top: 100px;
                width: 60% ;
            }       
        </style>
    </head>
    <body>
        <fieldset>
            <legend class='h2'>Add Item</legend>
            <form action="actions/a_create.php" method= "post" enctype="multipart/form-data">
                <table class='table'>
                    <tr>
                        <th>Title</th>
                        <td><input class='form-control' type="text" name="title"  placeholder="Title" /></td>
                    </tr>    
                    <tr>
                        <th>ISBN</th>
                        <td><input class='form-control' type="text" name= "isbn" placeholder="ISBN" step="any" /></td>
                    </tr>
                    <tr>
                        <th>Type</th>
                        <td><input class='form-control' type="text" name= "type" placeholder="type" step="any" /></td>
                    </tr>
                    <tr>
                        <th>Description</th>
                        <td><textarea name="description"  cols="100" rows="5" placeholder="Short Description..."></textarea></td>
                    </tr>
                    <tr>
                        <th>Author First Name</th>
                        <td><input class='form-control' type="text" name= "first" placeholder="Author First Name" step="any" /></td>
                    </tr>
                    <tr>
                        <th>Author Last Name</th>
                        <td><input class='form-control' type="text" name= "last" placeholder="Author Last Name" step="any" /></td>
                    </tr>
                    <tr>
                        <th>Publisher Name</th>
                        <td><input class='form-control' type="text" name= "publisher" placeholder="Publisher Name" step="any" /></td>
                    </tr>
                    <tr>
                        <th>Publisher Address</th>
                        <td><input class='form-control' type="text" name= "address" placeholder="Publisher Address" step="any" /></td>
                    </tr>
                    <tr>
                        <th>Publish Date</th>
                        <td><input class='form-control' type="date" name= "publishDate" placeholder="Publisher Name" step="any" /></td>
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
                        <td><button class='btn btn-success' type="submit">Add item</button></td>
                        <td><a href="index.php"><button class='btn btn-warning' type="button">Home</button></a></td>
                    </tr>
                </table>
            </form>
        </fieldset>
    </body>
</html>