<?php
$target_dri = "assets/upload";
// $target_file = $target_dri. basename($_FILES['fileToUpload']['name']);

$uploadOK = 1;
// $image_file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));  

if(isset($_POST['submit'])){
    // print_r($_FILES);
    $fileName = $_FILES['fileToUpload']['name'];
    $fileNameType = strtolower($fileName);
    $imageFileType = pathinfo($fileNameType, FILEINFO_EXTENSION);  

    $fileType = $_FILES['fileToUpload']['type'];

    $fileTemName = $_FILES['fileToUpload']['tmp_name'];
    // $fileTemName = getimagesize($fileTemName); 
    $fileErr = $_FILES['fileToUpload']['error'];
    $fileSize = $_FILES['fileToUpload']['size'];   
    
    if(file_exists($imageFileType)){
        echo "file is already Exist";
        $uploadOK = 0;
    }
    if($fileSize > 5000000){
        echo "Sorry, your file is too large.";
        $uploadOK = 0;
    }
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
 if($uploadOK == 0){
    echo "Sorry, your file was not uploaded.";
 }else{
    if (move_uploaded_file($fileTemName, $target_dri)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
 }
   
}
?>  