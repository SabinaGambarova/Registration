<?php

var_dump($_FILES['sekil']);
$sekil=$_FILES['sekil'];
echo "<hr>";
if($sekil['type']=='image/jpeg' || $sekil['type']=='image/png'){
    if($sekil['size']<10000){
        $folder_name='uploads/';

        $array_name=explode('.',$_FILES['sekil']['name']);
        echo "<hr>";
        var_dump($array_name);
        echo "<hr>";
        $img_name=$folder_name.time().'.'.end($array_name);
        echo $img_name;
        move_uploaded_file($_FILES['sekil']["tmp_name"],$img_name);
    }
    else
    {
        echo "Hecm boyukdur";
    }
}
else
{
    echo "Type duzgun deyil";
}