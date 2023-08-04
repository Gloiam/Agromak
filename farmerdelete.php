<html>
<title> delete.farmer</title>
<body>
<?php
require_once "config.php";
$id=$_GET['user_id'];
$del=mysqli_query($conn,"DELETE from farmer where user_id='$id'");
if ($del)
{
    header("location:productview.php");

}
else{

}


?>
</body>
</html>