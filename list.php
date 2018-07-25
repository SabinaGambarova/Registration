<?php
$users=file_get_contents('test.txt');
$users=json_decode($users,true);

function sort_name($a,$b){
    echo "<hr>";
    echo $a['name']." ".$b['name']." ".strcmp($a['name'],$b['name']);
    return strcmp($b['name'],$a['name']) ;
}

usort($users,"sort_name");

function sort_age($a,$b){
    echo "<hr>";
    echo $b['age']." ".$a['age']." ".strcmp($b['age'],$a['age']);
    return strcmp($a['age'],$b['age']) ;
}

usort($users,"sort_age");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
        <table border="1" cellspacing="10">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Surname</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Yash</th>
                </tr>
            </thead>
            <tbody>

    
    <?php foreach($users as $key=>$value){?>
        <tr>
            <td><?= $key?></td>
            <td><?= $value['name']?></td>
            <td><?= $value['surname']?></td>
            <td><?= $value['email']?></td>
            <td><?= $value['password']?></td>
            <td><?= $value['age']?></td>
        </tr>

    <?php } ?>
            </tbody>
        </table>
</body>
</html>