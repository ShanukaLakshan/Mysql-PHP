<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM user");
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Retrive data</title>
    </head>
<body>
    <?php
    if(mysqli_num_rows($result) > 0){
    ?>
    <table>
        <tr>
            <td>Sl No</td>
            <td>First Name</td>
            <td>Last Name</td>
            <td>City</td>
            <td>Email id</td>
            <td>Action</td>
        </tr>
        <?php
            $i=0;
            while($row = mysqli_fetch_array($result)) {

            // if($i%2==0)
            // $classname="even";
            // else
            // $classname="odd";
        ?>
        <tr>
            <td><?php echo $row["id"]; ?></td>
            <td><?php echo $row["first_name"]; ?></td>
            <td><?php echo $row["last_name"]; ?></td>
            <td><?php echo $row["city_name"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <!-- <td><a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a> | <a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td> -->
            <td><a href="update-process.php?id=<?php echo $row["id"]; ?>">Update</a></td>
        </tr>
        <?php
        $i++;
        }
        ?>
    </table>

    <?php }
    else{
        echo "No result found";
    }
    ?>

</body>
</html> 