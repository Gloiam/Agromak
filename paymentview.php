<html>
<title>payment</title>

<body>
    <fieldset>
        <legend align="center">View payment</legend>
        <?php
        require_once 'config.php';
        error_reporting(E_ALL ^ E_NOTICE);
        $select = mysqli_query($conn, "select pay_id, payname,date,quantity,amount,pname,username from payment,product,farmer where (payment.p_id=product.p_id and payment.user_id=farmer.user_id)");
        $num_rows = mysqli_num_rows($select);
        if ($select == 0) {
            echo "No Records Found";
        } else {
        ?>
            <table border="2" align="center" width="50%">
                <tr bgcolor="yellow">
                    <th>payment</th>
                    <th>date</th>
                    <th>quantity</th>
                    <th>amount</th> 
                    <th>pname</th> 
                    <th>username</th> 
                    <th>action</th> 
                </tr>
                <?php
                while ($rows = mysqli_fetch_array($select)) {
                    echo '<tr>';
                    echo '<td>' . $rows['payname'] . '</td>';
                    echo '<td>' . $rows['date'] . '</td>';
                    echo '<td>' . $rows['quantity'] . '</td>';
                    echo '<td>' . $rows['amount'] . '</td>';
                    echo '<td>' . $rows['pname'] . '</td>';
                    echo '<td>' . $rows['username'] . '</td>';
                    echo '<td> <a href="paymentedit.php?pay_id= ' . $rows['pay_id'] . '" onclick=" return confirm(\'Are you sure you want to edit\') ">Edit</a> | <a href="paymentdelete.php?pay_id= ' .$rows['pay_id'] . '" onclick=" return confirm(\'Are you sure you want to delete?\')">Delete</a> </td>';
                    echo '<tr>';
                }
                ?>
            </table>
        <?php
        }
        ?>
    </fieldset>
</body>

</html>