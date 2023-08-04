<html>
<title> delete.product</title>
<body>
<?php
require_once "config.php";
$id=$_GET['p_id'];
$del=mysqli_query($conn,"DELETE from product where p_id='$id'");
if ($del)
{
    header("location:productview.php");

}
else{

}


?>
</body>
</html>