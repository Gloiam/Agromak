<html>
<title> delete.payment</title>
<body>
<?php
require_once "config.php";
$id=$_GET['pay_id'];
$del=mysqli_query($conn,"DELETE from payment where pay_id='$id'");
if ($del)
{
    header("location:paymentview.php");

}
else{

}


?>
</body>
</html>