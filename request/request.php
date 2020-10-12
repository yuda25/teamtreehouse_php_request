<?php
$data=[];

if(isset($_GET['action']))
{
    $action=$_GET['action'];

    if($action=='Daftar')
    {
        $data[]=$_GET;
    }
}

header('Content-Type:application/json');
header("Access-Control-Allow-Origin:*");

// var_dump(json_encode($data)); //json_encode=untuk mengubag dati oko ke java script

echo json_encode($data);
// cara penampilan di browser
// http://localhost:90/request.php?action=Daftar&nama=Habibi
// php -S localhost:90 -t .

?>