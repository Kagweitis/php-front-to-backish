<?php
    if (isset($_POST['submit'])){
        if (!empty($_FILES['upload']['name'])){
            echo 'thanks for upload';

        } else{
            $message = '<p style=color: red;> select a file man</p>';
            
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>
            upload master
        </title>
    </head>

    <body>
        <?php echo $message ?? null; ?>
        <form action=" 13_fileuploading.php"
         method="POST"
        enctype="multipart/form-data">

        select a file

        <input type="file" name="upload" id="upload">
        <br>

        <input type="submit" value="submit" name="submit" id="submit">
        <br>

        </form>
    </body>
</html>

<style>
    #upload{
        background-color: red;
        box-shadow: inset;
        border-radius: 10px;
    }
</style>