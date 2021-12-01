<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bintang</title>
    </head>
    <body>
        <form action="" method="post">
            <table>
                <tr>
                    <td><label for="jumlah">Masukan Baris Bintang</label></td>
                    <td>:</td>
                    <td><input type="number" name="jumlah" id="jumlah" placeholder="Masukan Jumlah Baris..."></td>
                </tr>
                <tr>
                    <td><label>Pilih Bentuk Segitiga Bintang</label></td>
                    <td>:</td>
                    <td>
                        <label><input type="radio" name="bentuk" value="siku_siku">Siku-siku</label>
                        <br>
                        <label><input type="radio" name="bentuk" value="siku_kebalik">Siku Terbalik</label>
                        <br>
                        <label><input type="radio" name="bentuk" value="sempurna">Sempurna</label>
                        <br>
                        <label><input type="radio" name="bentuk" value="sempurna_kebalik">Sempurna Terbalik</label>
                    </td>
                </tr>
                <tr>
                    <td><button type="submit" name="submit">Submit</button></td>
                </tr>
            </table>
        </form>
    </body>
    <br><br><br>
</html>
<?php
    if (isset($_POST["submit"])) {
        $jumlah = $_POST["jumlah"];
        if ($_POST["bentuk"] == "siku_siku") {
        	for($a = $jumlah; $a > 0; $a--){
            	for($b = $jumlah; $b >= $a; $b--){
            		echo " * ";
            	}
        	echo "<br>";
        	}
        }elseif ($_POST["bentuk"] == "siku_kebalik") {
            for($i = 1; $i <= $jumlah; $i++){
            	for($j = $jumlah; $j >= $i; $j -=1){
            		echo " * ";
            	}
            	echo "<br>";
        	}  
        }elseif ($_POST["bentuk"] == "sempurna") {
            for($x = $jumlah; $x > 0; $x--){
            	for($y = 1; $y <= $x; $y++){
            		echo "&nbsp";
            	}
            	for($z = $jumlah; $z >= $x; $z--){
            		echo"*";
            	}
            	echo"<br>";
        	}
        }else {
            for($k = 1; $k <= $jumlah; $k++){
            	for($l = 1; $l <= $k; $l++){
            		echo "&nbsp";
            	}
            	for($m = $jumlah; $m >= $k; $m-=1){
            		echo "*";
            	}
            	echo "<br>";
        	}
        }
    }
?>
