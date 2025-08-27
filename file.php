<?php
$targetDir = "load/";
 $targetFile = $targetDir . basename($_FILES["image"]["name"]);
 $uploadOk = 1;
$imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));


if(isset($_POST["image"])) {
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check === false) {
        echo "❌ File is not an image.";
       $uploadOk = 0;
    }
}

$allowed = ['jpg', 'jpeg', 'png', 'gif'];
if(!in_array($imageFileType, $allowed)) {
    echo "❌ Only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}

if ($_FILES["image"]["size"] > 2 * 1024 * 1024) {
    echo "❌ Sorry, your file is too large.";
$uploadOk = 0;
}


if ($uploadOk) {
    if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
       echo "✅ The file ". htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
   } else {
         echo "❌ Sorry, there was an error uploading your file.";
    }
 }

 echo "<br><a href='upload.php'>Back to Gallery</a>";
 ?> 