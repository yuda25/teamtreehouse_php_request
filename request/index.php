<?php

// $_GET method
if($_GET)
{
 echo "Halo: ". $_GET['nama']. "<br />";
 echo "Alamat Anda: ". $_GET["alamat"]. "<br />";
}

// $_POST method
if($_POST)
{
 echo "Halo: ". $_POST['nama']. "<br />";
 echo "Alamat Anda: ". $_POST["alamat"]. "<br />";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col">
            <!-- $_GET method -->
<h3>$_GET method</h3>
<form action="#" method="get">
 <input type="text" name="nama" placeholder="Nama"></input><br/>
 <input type="text" name="alamat" placeholder="Alamat"></input><br/>
 <input type="submit" name="submit" value="Submit"></input>
</form>
        </div>

        <div class="col">
            
        <!-- $_POST method -->
   <h3>$_POST method</h3>
<form action="#" method="post">
 <input type="text" name="nama" placeholder="Nama"></input><br/>
 <input type="text" name="alamat" placeholder="Alamat"></input><br/>
 <input type="submit" name="submit" value="Submit"></input>
</form>
        </div>

    </div>
</div>

</body>
</html>