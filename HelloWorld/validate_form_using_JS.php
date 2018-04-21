<!DOCTYPE html>
<html>
    <head>
        <title>Validate form với JS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script type="text/javascript">
            function validateForm() {
                var user = document.getElementById("user_id").value;
                var pass = document.getElementById("pass_id").value;
                if(user == '') {
                    alert('Please enter username! Stupid!');
                    return false;
                }
                if(pass == '') {
                    alert('You still haven\'t filled up password field! Stupid!');
                    return false;
                }
                
                return true;
            }
        </script>

    </head>
    <body>
        <h1>freetuts.net - ứng dụng đăng nhập</h1>
        <form method="post" action="" onsubmit="return validateForm()">
            Username: <input type="text" name="username" id="user_id" value="<?php if(isset($_POST['username'])) echo $_POST['username']; ?>"/> <br/> <br/>
            Password: <input type="post" name="password" id="pass_id" value=""/> <br/> <br/>
            <input type="submit" name="btn" value="Đang Nhập"/>
        </form>
        <?php 
            // if(isset($_POST['btn'])) var_dump($_POST);
            if(isset($_POST['btn'])) {
                echo "<div>Username = ".$_POST['username']."</div>";
                echo "<div>Password = ".$_POST['password']."</div>";
            }
        ?>
    </body>
</html>