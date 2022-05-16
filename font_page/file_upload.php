
<?php
// $target_dri = "assets/upload";
// $target_file = $target_dri. basename($_FILES['fileToUpload']['name']);

// $uploadOK = 1;
// $image_file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));  

if(isset($_POST['submit'])){
    print_r($_FILES);
    die;
    $check = getimagesize($_POST['fileToUpload']['tem_name']);
    if($check !== false){
        echo $check['mime'].'.';
        $uploadOK = 1;
    }else{
        echo "file is not a image";
        $uploadOK = 0;
    }
}
?>

<form action="font_page/upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload">
  <input type="submit" value="Upload Image" name="submit">
</form>