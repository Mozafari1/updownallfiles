<!-- PDF, gif and jpeg -->
<?php

 $targetfolder = "uploads/";

 $targetfolder = $targetfolder . basename( $_FILES['fileToUpload']['name']) ;

 $ok=1;

$file_type=$_FILES['fileToUpload']['type'];

if ($file_type=="application/pdf" || $file_type=="image/gif" || $file_type=="image/jpeg") {

 if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $targetfolder))

 {

 echo "The file ". basename( $_FILES['fileToUpload']['name']). " is uploaded";

 }

 else {

 echo "Problem uploading file";

 }

}

else {

 echo "You may only upload PDFs, JPEGs or GIF files.<br>";

}

?>