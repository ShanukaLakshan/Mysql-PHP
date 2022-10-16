<?php
include_once 'database.php';
if(count($_POST)>0) {
    mysqli_query($conn,"UPDATE user set first_name='" . $_POST['first_name'] . "', 
    last_name='" . $_POST['last_name'] . "', city_name='" . $_POST['city_name'] . "' ,
    email='" . $_POST['email'] . "' WHERE id='" . $_POST['id'] . "'");
    $message = "<p style='color:green;'>Record Modified Successfully !</p>";
}
    $result = mysqli_query($conn,"SELECT * FROM user WHERE id='" . $_GET['id'] . "'");
    $row= mysqli_fetch_array($result);
?>
<html>
    <head>
        <title>Update User Data</title>
    </head>
<body>
    <form name="frmUser" method="post" action="">
        <div>
            <?php if(isset($message)) { echo $message; } ?>
        </div>
        <div style="padding-bottom:5px;">
            <a href="retrieve.php">User List</a>
        </div>
        ID: <br>
        <input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
        First Name: <br>
        <input type="text" name="first_name" class="txtField" value="<?php echo $row['first_name']; ?>">
        <br>
        Last Name :<br>
        <input type="text" name="last_name" class="txtField" value="<?php echo $row['last_name']; ?>">
        <br>
        City:<br>
        <input type="text" name="city_name" class="txtField" value="<?php echo $row['city_name']; ?>">
        <br>
        Email:<br>
        <input type="text" name="email" class="txtField" value="<?php echo $row['email']; ?>">
        <br>
        <input type="submit" name="submit" value="Submit" class="buttom">                               

    </form>
</body>
</html>