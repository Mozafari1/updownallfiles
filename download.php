<?php
require_once("include/Sessions.php");
include "include/req.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];
    global $ConnectingDB;
    $sql= "SELECT * FROM posts WHERE id='$id'";
    $stmt = mysqli_query($ConnectingDB,$sql);
    // $data = mysqli_fetch_assoc($stmt);
    // $file="upload/".$datarow['image'];
    // if (file_exists($file)) {
    //     header('Content-Description: File Transfer');
    //     header('Content-Type: application/octet-stream');
    //     header('Content-Disposition: attachment; filename='.basename($file)); 
    //     header('Content-Length: ' . filesize($file));
      
    //     readfile($file);
    //     exit;
    // }

    while ($datarow =mysqli_fetch_assoc($stmt)) {
        $image="upload/".$datarow['image'];
        header('Content-Description: File Transfer');
        header('content-type:appliction/octent-stream');
        header('content-Disposition: attachment; filename ="'.basename($image).'"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('content-lenght='.filesize($image));
        ob_clean();
        flush();
        readfile($image);

    }

}

?>
