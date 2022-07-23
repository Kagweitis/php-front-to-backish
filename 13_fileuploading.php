<?php
    if (isset($_POST['submit'])){
        //allowed extensions

        $allowed_ext = array('png', 'jpeg', 'jpg');

        if (!empty($_FILES['upload']['name'])){
            echo 'thanks for selecting file';
           $file_name = $_FILES['upload']['name'];
           $file_size = $_FILES['upload']['size'];
           $file_tmp = $_FILES['upload']['tmp_name'];
           $target = "uploads/${file_name}";

            //checking allowed exts

            $file_ext = explode('.', $file_name);
            $file_ext = strtolower(end($file_ext));

            echo $file_ext;

            //validating the extensions

            if (in_array($file_ext, $allowed_ext)){
                if ($file_size <= 1000000){
                    move_uploaded_file($file_tmp, $target);
                    $message = '<p style="color:green"> Success!! </p>';
                } else {
                    echo '<p style="color: blue"> file too large !!!</p>';
                }
            } else {
                echo '<p style="color: red"> invalid !!!</p>';
            }


        } else{
            $message = '<p style="color: brown"> select a file man</p>';
            
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