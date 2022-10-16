<!DOCTYPE html>
<html>
    <head>
        <title>Insert data in mysql data base</title>
    </head>
    <body>
        <h1>Insert Employee Data</h1>
        <form method="post" action="process.php">
            <table style="align-items: center">
                <tr>
                    <td style="align-items: center"></td>
                    </tr>
                    <tr>
                    <td>First Name<input type="text" name="first_name" required /></td>
                    </tr>
                    <tr>
                    <td>Last Name<input type="text" name="last_name" required /></td>
                    </tr>
                    <tr>
                    <td>User City<input type="text" name="city_name" required /></td>
                    </tr>
                    <tr>
                    <td>Email id<input type="text" name="email" required /></td>
                    </tr>
                    <tr>
                    <td><button type="submit" name="btn-save"><strong>SAVE</strong></button></td>
                </tr>
            </table>
        </form>
    </body>
</html> 