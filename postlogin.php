

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form method="POST" action="form.php" enctype="multipart/form-data">
        <input type="file" name="sekil"   accept="image/png, image/jpeg">
        <input type="submit">
    </form>
</body>
</html>



<?php

$users=file_get_contents('test.txt');
$users=json_decode($users,true);


$name=$_POST['ad'];
$password=$_POST['parol'];

$k=0;
foreach($users as $key=>$value){
    if( ($name==$value["name"] || $name==$value["email"]) && password_verify($password,$value["password"])){

        $k=1;
        echo "Siz daxil oldunuz";
    }

}

if($k==0){
    echo "bele user yoxdu";
}

