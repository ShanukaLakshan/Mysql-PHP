<?php include_once 'database.php';
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE user set id='" . $_POST['id'] . "', first_name='" . $_POST['first_name'] . "', last_name='" . $_POST['last_name'] . "', city_name='" . $_POST['city_name'] . "' ,email='" . $_POST['email'] . "' WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM user WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Add New User</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<form name="frmUser" method="post" action="">
<div style="width:500px;">
<div class="message"><?php if(isset($message)) { echo $message; } ?></div> <div align="right" style="padding-bottom:5px;"><a href="retrieve.php" class="link"><img alt='List' title='List' src='images/list.png' width='15px' height='15px'/> List User</a></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr class="header">
<td colspan="2">Edit User</td>
</tr>
<tr>
<td><label>Username</label></td>
<td><input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>"><input type="text" name="userName" class="txtField" value="<?php echo $row['id']; ?>"></td>
</tr>
<tr>
<td><label>First Name</label></td>
<td><input type="text" name="first_name" class="txtField" value="<?php echo $row['first_name']; ?>"></td>
</tr>
<td><label>Last Name</label></td>
<td><input type="text" name="last_name" class="txtField" value="<?php echo $row['last_name']; ?>"></td>
</tr>
<tr>
<td><label>user city</label></td>
<td><input type="text" name="city_name" class="txtField" value="<?php echo $row['city_name']; ?>"></td>
</tr>
<tr>
<td><label>Email</label></td>
<td><input type="text" name="email" class="txtField" value="<?php echo $row['email']; ?>"></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="buttom"></td>
</tr>
</table>
</div>
</form>
</body>
</html> 