<html>
<title>farmer</title>

<body>
    <fieldset>
        <legend align="center">View farmer</legend>
        <?php
        require_once 'config.php';
        error_reporting(E_ALL ^ E_NOTICE);
        $select = mysqli_query($conn, "select user_id, username,contact,address,dob,gender,password from farmer");
        $num_rows = mysqli_num_rows($select);
        if ($select == 0) {
            echo "No Records Found";
        } else {
        ?>
            <table border="2" align="center" width="50%">
                <tr bgcolor="yellow">
                    <th>farmer</th>
                    <th>contact</th>
                    <th>address</th>
                    <th>dob</th>
                    <th>gender</th>
                    <th>password</th>
                    <th>Action</th> 
                </tr>
                <?php
                while ($rows = mysqli_fetch_array($select)) {
                    echo '<tr>';
                    echo '<td>' . $rows['username'] . '</td>';
                    echo '<td>' . $rows['contact'] . '</td>';
                    echo '<td>' . $rows['address'] . '</td>';
                    echo '<td>' . $rows['dob'] . '</td>';
                    echo '<td>' . $rows['gender'] . '</td>';
                    echo '<td>' . $rows['password'] . '</td>';
                    echo '<td> <a href="farmeredit.php?user_id= ' . $rows['user_id'] . '" onclick=" return confirm(\'Are you sure you want to edit\') ">Edit</a> | <a href="farmerdelete.php?user_id= ' .$rows['user_id'] . '" onclick=" return confirm(\'Are you sure you want to delete?\')">Delete</a> </td>';
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