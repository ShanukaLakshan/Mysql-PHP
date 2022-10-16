<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center"
      style="min-height: 100vh">
        <form 
            action="signup-check.php"
            class="border shadow p-3 rounded"
            method="post" 
            style="width: 450px;"
        >
     	<h2 class="text-center p-3">SIGN UP</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?>
        </p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

          <div class="mb-1">
            <label class="form-label">Name</label>
                <?php if (isset($_GET['name'])) { ?>
                    <input type="text" 
                            name="name" 
                            placeholder="Name"
                            value="<?php echo $_GET['name']; ?>"><br>
                <?php }else{ ?>
                    <input 
                            type="text" 
                            name="name" 
                            placeholder="Name"
                            class="form-control"><br>
                <?php }?>
          </div>

          <div class="md-1">
            <label class="form-label">User name</label>
                <?php if (isset($_GET['uname'])) { ?>
                    <input type="text" 
                            name="uname" 
                            placeholder="User Name"
                            value="<?php echo $_GET['uname']; ?>"><br>
                <?php }else{ ?>
                    <input type="text" 
                            name="uname" 
                            placeholder="User Name"
                            class="form-control"><br>
                <?php }?>
          </div>


     	<div class="md-1"><label>Password</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Password"
                 class="form-control"><br>

          <label>Re Password</label>
          <input type="password" 
                 name="re_password" 
                 placeholder="Re_Password"
                 class="form-control"><br>
        </div>

        <div class="mb-1">
		    <label class="form-label">Select User Type:</label>
		  </div>
		  <select class="form-select mb-3"
		          name="role" 
		          aria-label="Default select example">
			  <option selected value="user">User</option>
			  <option value="admin">Admin</option>
		  </select>
        
        <div class="cont d-flex justify-content-center ">
            <button class="btn btn-primary"  type="submit">Sign Up</button>
        </div>
          <a href="index.php" class="ca">Already have an account?</a>
     </form>
    </div>
     
</body>
</html>