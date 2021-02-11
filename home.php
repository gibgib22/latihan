<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
    <center>
        <?php
            if($_POST["username"]=="admin" && $_POST["password"]=="admin")
            {
                echo "PASSWORD BENAR YEAY!<br>";
                echo "Selamat Datang".$_POST["username"];
            }else{
                echo "GAGAL LOGIN";
            }
        ?>
    </center>
</body>
</html>