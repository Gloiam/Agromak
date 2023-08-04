<html>

<head>
    <title>Update</title>
</head>

<body bgcolor="RED">
    <?php
    require_once "config.php";
    $id = $_GET['user_id'];
    $select = mysqli_query($conn, "SELECT * FROM farmer WHERE user_id='$id'");
    $rows = mysqli_fetch_array($select);
    if (isset($_POST["Update"])) {
        $username = $_POST["username"];
        $update = mysqli_query($conn, "UPDATE farmer SET username='$username' WHERE user_id='$id' ");
        if (!$update) {
            echo "Not saved: " . mysqli_error($conn);
        } else {
            echo "Data updated successfully";
        }
    }
    ?>

    <fieldset>
        <legend align="center">Please Register Here</legend>
        <table border="1" align="center" bgcolor="green">
            <form method="POST" action="#">
                <tr>
                    <td>farmer</td>
                    <td>
                        <input type="text" name="username" value="<?php echo $rows['username']; ?>" required />
                    </td>
                </tr>
                <tr>
                    <td><input type="submit" name="Update" value="Update" /></td>
                    <td><input type="reset" /></td>
                </tr>
            </form>
        </table>
    </fieldset>
</body>

</html>