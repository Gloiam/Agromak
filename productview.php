<html>
<title>product</title>

<body>
    <fieldset>
        <legend align="center">View product</legend>
        <?php
        require_once 'config.php';
        error_reporting(E_ALL ^ E_NOTICE);
        $select = mysqli_query($conn, "select p_id, pname,pquantity,pprice,username from product,farmer where (product.user_id=farmer.user_id)");
        $num_rows = mysqli_num_rows($select);
        if ($select == 0) {
            echo "No Records Found";
        } else {
        ?>
            <table border="2" align="center" width="50%">
                <tr bgcolor="yellow">
                    <th>product</th>
                    <th>quantity</th>
                    <th>price</th>
                    <th>username</th>
                    <th>Action</th> 
                </tr>
                <?php
                while ($rows = mysqli_fetch_array($select)) {
                    echo '<tr>';
                    echo '<td>' . $rows['pname'] . '</td>';
                    echo '<td>' . $rows['pquantity'] . '</td>';
                    echo '<td>' . $rows['pprice'] . '</td>';
                    echo '<td>' . $rows['username'] . '</td>';
                    echo '<td> <a href="productedit.php?p_id= ' . $rows['p_id'] . '" onclick=" return confirm(\'Are you sure you want to edit\') ">Edit</a> | <a href="productdelete.php?p_id= ' .$rows['p_id'] . '" onclick=" return confirm(\'Are you sure you want to delete?\')">Delete</a> </td>';
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