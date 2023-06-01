
<?php
$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["document"]["name"]);
$uploadOk = 1;
$documentFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

//renaming a file_exists
if(isset($_FILES["document"])):
$tmp_name = $_FILES["document"]["tmp_name"];
$new_name = "upload/".time().".".$documentFileType; // .pdf is extension of my upload file and now I will upload it
move_uploaded_file($tmp_name,$new_name); // with this function I will upload files and I will rename them with $new_name
endif;

//
// if (file_exists($target_file)) {
//     echo "Sorry, file already exists.";
//     $uploadOk = 0;
// }
//
// if ($_FILES["document"]["size"] > 500000) {
//     echo "Sorry, your file is too large.";
//     $uploadOk = 0;
// }
//
if($documentFileType != "jpg" && $documentFileType != "jpeg" && $documentFileType != "pdf") {
    echo "Sorry, only JPG, JPEG & PDF files are allowed.";
    $uploadOk = 0;
}
//
// if ($uploadOk == 0) {
//     echo "Sorry, your file was not uploaded.";
//
// } else {
//     if (move_uploaded_file($_FILES["document"]["tmp_name"], $target_file)) {
//         echo "The file ". basename( $_FILES["document"]["name"]). " has been uploaded.";
//     } else {
//         echo "Sorry, there was an error uploading your file.";
//     }
// }


?>
