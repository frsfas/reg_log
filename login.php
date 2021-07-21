<?php
    if(!empty($_POST)){
        $servername='localhost';
        $dbname='fas';
        $username='root';
        $password='';

        $conn=mysqli_connect($servername,$username,$password,$dbname);
        $email = $_POST['email'];
        $password = $_POST['password'];
        
        if ($result=mysqli_query($conn,"select * from register where email='$email' and password=md5('$cpassword')")) {
            $no = mysqli_num_rows($result);
            if ($no) {
                echo "Logged in successful";
            } else {
                echo "invalid email / password";
            }

        } else {
            echo "invalid email / password";
        }


        // echo "User login Successfully";
            // header("Location:fer.php");
    }
?>
<html>
    <head>
        <title>project</title>
        <link rel="stylesheet" type="text/css" href="design.css">

    </head>
    <body>
        <div>
            <h1>REGISTER FORM</h1>
            <br/>
            <br/>
            <form action="login.php" method="post" name="form1">
                <table>
                    
                    <tr>
                        <td><label>email :</label></td>
                        <td><input type="email" name="email" placeholder="enter your mail i'd" required size="40"></td>
                    </tr>
                    <tr>
                        <td><label>password :</label></td>
                        <td><input type="password" name="password" placeholder="enter your password" required size="40"></td>
                    </tr>
                    
                    <tr>
                        <td></td>
                        <td><input class="submit" type="submit" name="submit" value="submit"></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>
