<!DOCTYPE html>
<html lang="en">
<head>
    <title>form login</title>
</head>
<center>
    <body>
    	<h1>Form Login</h1>
    	<!-- cek pesan nontifikasi -->
    	<?php
    		if(isset($_GET['pesan'])){
    			if($_GET['pesan']=="gagal"){
    				echo "Login gagal username dan password salah";
    			}else if($_GET['pesan']=="logout"){
    				echo "Anda telah berhasil logout";
    			}
    		}
    	?>
    	<br/>
    	<br/>
        <form method="post" action="cek_login.php">
            <table>
                <tr>
                    <td>Username</td>
                    <td>:</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>:</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" value="LOGIN"></td>
                </tr>
            </table>
        </form>
    </body>
</center>
</html>