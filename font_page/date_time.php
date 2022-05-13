<?php
echo date('d')."<br>";
echo date('y')."<br>";
echo date('m')."<br>";
echo date('l')."<br>";
echo date('y/m/d')."<br>";
echo date('y-m-d')."<br>";

date_default_timezone_set("Asia/Dhaka");
echo date('h')."<br>";

$d=mktime(18, 0, 0, 5, 13, 2022);
$f =  date("Y-m-d h:i:sa", $d);
$e=mktime(18, 0, 0, 5, 13, 2022);
$g =  date("Y-m-d h:i:sa", $d);
while($f == $g){
    echo "YOu time is start";
    break;
}

// file derectory 

$file = 'font_page/readme.txt';
echo filesize($file);
if(!file_exists('text_file')){    
    mkdir('text_file');
    if(!file_exists('text_file/image_folder')){
        mkdir('text_file/image_folder');
    }else{
        echo "Floder Already Exist";
    }   
}else{
    echo "Floder Already Exist";
}
// if(file_exists('text_file')){
//     rmdir('text_file');
//     if(file_exists('text_file/image_folder')){
//         rmdir('text_file/image_folder');
//     }
// }else{
//     echo "";
// }


// if(file_exists($file)){
//     echo readfile('font_page/readme.txt');
// }else{
//     echo" file not found";
// }


?>