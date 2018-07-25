<?php



$users=file_get_contents('test.txt');
$users=json_decode($users,true);



$user=array();
$user['name']=$_POST['ad'];
$user['surname']=$_POST['soyad'];
$user['password']=password_hash($_POST['parol'],PASSWORD_DEFAULT );
$user['email']=$_POST['unvan'];
$user['age']=$_POST['yash'];

if( empty($user['name']) || empty($user['surname']) || empty($user['password']) || empty($user['email']) || empty($user['age']) ){
    echo "Butun xanalari doldurulmalidir";
    die;
}

if($user['age'] < 13) {
    echo "Qeydiyyatdan yalniz 13 yashdan yuxari shexsler keche biler";
    die;
}

foreach($users as $key=>$value){
    if($user['name']==$value["name"]){
        echo "Bu ad artiq var.";
        die;
    }

    if($user['email']==$value["email"]){
        echo "Bu email artiq var.";
        die;
        
    }

}

$users[]=$user;
$a_to_string=json_encode($users);
var_dump(file_put_contents('test.txt',$a_to_string));


