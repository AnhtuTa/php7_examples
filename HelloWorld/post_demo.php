<!DOCTYPE html>
<html>
    <head>
        <title>Freetuts.net - xử lý form với POST</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>freetuts.net - ứng dụng đăng nhập</h1>
        <form method="post" action="">
            Username: <input type="text" name="username" value=""/> <br/> <br/>
            Password: <input type="post" name="password" value=""/> <br/> <br/>
            <input type="submit" name="btn" value="Đang Nhập"/>
        </form>
        <?php 
            if(isset($_POST['btn'])) var_dump($_POST);
        ?>
    </body>
</html>