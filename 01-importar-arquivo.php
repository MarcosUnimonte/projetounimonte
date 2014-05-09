<?php
    if(isset($_POST["importar"])){
       // print_r($_FILES);
       move_uploaded_file($_FILES["arquivo01"]["tmp_name"], "upload/" . $_FILES["arquivo01"]["name"]);
        }
?>


<html>
    <head>
        <title> Uploaded</title>
        <meta charset="utf-8">
    </head>
    <body>   
    
        <form action="01-importar-arquivo.php" method="POST" enctype="multipart/form-data">
            <label>
            Arquivo: <input type="file" name="arquivo01"/>
            </label>
                    <br><br>
                     <input type="submit" name="importar" value="importar" />
                     
        </form>
    </body>
</html>
