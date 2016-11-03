<!DOCTYPE html enctype="multipart/form-data">
<html>
<head>
</head>
<body>
<?php
include("session.php");
$status="awaited";
$address=$_POST['address'];
$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["photo"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["photo"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }
}
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
if ($_FILES["photo"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
} else {
    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
        //echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
    } else {
        //echo "Sorry, there was an error uploading your file.";
    }
}
$ttv=$target_file; 
$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["photoo"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["photoo"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }
}
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
if ($_FILES["photoo"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
} else {
    if (move_uploaded_file($_FILES["photoo"]["tmp_name"], $target_file)) {
        //echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
    } else {
        //echo "Sorry, there was an error uploading your file.";
    }
}
$dgcc=$target_file;
$target_dir = "upload/";
$target_file = $target_dir . basename($_FILES["photot"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["photot"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        $uploadOk = 0;
    }
}
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
if ($_FILES["photot"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
} else {
    if (move_uploaded_file($_FILES["photot"]["tmp_name"], $target_file)) {
        //echo "The file ". basename( $_FILES["photo"]["name"]). " has been uploaded.";
    } else {
        //echo "Sorry, there was an error uploading your file.";
    }
}
$por=$target_file;
if ( !( $database = mysql_connect( "localhost","root", "" ) ) )
 die( "Could not connect to database" );
if ( !mysql_select_db( "13bcs049db", $database ) )
 die( "Could not open products database" );
$query=mysql_query("select consumerid from consumer where uname='".$_SESSION['login_user']."'", $database);
$row = mysql_fetch_assoc($query);
$consno = $row['consumerid'];
$query = "insert into locchang (consumerid,document,document1,document2,status,newaddress) values('".$consno."','".$ttv."','".$dgcc."','".$por."','".$status."','".$address."')";
if ( !( $result = mysql_query( $query, $database ) ) )
{
 print( "Could not execute query!" );
 die( mysql_error());
}
header("location: http://localhost/Profile.php");
mysql_close( $database );
?>
</body>
</html>