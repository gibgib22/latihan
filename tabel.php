<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> -->
    <title>IKI TABEL</title>
</head>
<body>
    <center>
        <h1>BELAJAR TABEL</h1>
        <table border = "1" style="border-collapse: collapse; border-color:red">
            <?php
                for ($baris=0; $baris <= 50 ; $baris++) 
                { 
                    echo "<tr>";

                    for ($kolom=0; $kolom <= 50 ; $kolom++) 
                    { 
                        echo "<td>$baris,$kolom</td>";
                    }
                    
                    echo "</tr>";
                }
            ?>
            </table>
    </center>
</body>
</html>