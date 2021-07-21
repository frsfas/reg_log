<?php
    if(!empty($_POST)){
        $servername='localhost';
        $dbname='fas';
        $username='root';
        $password='';

        $conn=mysqli_connect($servername,$username,$password,$dbname);

        $register_name = $_POST['name'];
        $register_age = $_POST['age'];
        $register_email = $_POST['email'];
        $register_mobile_no = $_POST['mobile_no'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        if($password!=$confirm_password) {
            echo "Password Mismatch";
        } else {
            $result = mysqli_query($conn,"insert into register values(null,'$register_name','$register_age','$register_email','$register_mobile_no',md5('$password'))");
            echo "User Created Successfully";
            header("Location:login.php");
        }

    }
?>
</head>
    <body>
        <div>
            <h1>REGISTER FORM</h1>
            <br/>
            <br/>
            <form action="register.php" method="post" name="form1">
                <table>
                    <tr>
                        <td><label>name :</label></td>
                        <td><input type="text" name="name" placeholder="enter your name" required size="40"></td>
                    </tr>
                    <tr>
                        <td><label>age :</label></td>
                        <td><input type="number" name="age" placeholder="enter your age" required size="40"></td>
                    </tr>
                    <tr>
                        <td><label>email :</label></td>
                        <td><input type="email" name="email" placeholder="enter your mail i'd" required min="18" max="99" size="40"></td>
                    </tr>
                    <tr>
                        <td><label>mobile_no :</label></td>
                        <td><input type="number" name="mobile_no" placeholder="enter your mobile_no" required size="40"></td>
                    </tr>
                    <tr>
                        <td><label>password :</label></td>
                        <td><input type="password" name="password" placeholder="enter your password" required size="40"></td>
                    </tr>
                    <tr>
                        <td><label>confirm_password :</label></td>
                        <td><input type="password" name="confirm_password" placeholder="enter again your password" required size="40"></td>
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