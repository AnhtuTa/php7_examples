<?php
    // Kiểm tra định dạng email
    function is_email($str) {
        return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
    }
    // Code PHP xử lý validate
    $error = array();
    $data = array();
    if (!empty($_POST['btn_submit'])) {
        // Lấy dữ liệu
        $data['fullname'] = isset($_POST['fullname']) ? $_POST['fullname'] : '';
        $data['email'] = isset($_POST['email']) ? $_POST['email'] : '';
        $data['content'] = isset($_POST['content']) ? $_POST['content'] : '';

        // Kiểm tra định dạng dữ liệu
        if (empty($data['fullname'])){
            $error['fullname'] = 'Bạn chưa nhập tên';
        }

        if (empty($data['email'])){
            $error['email'] = 'Bạn chưa email';
        } else if (!is_email($data['email'])){
            $error['email'] = 'Email không đúng định dạng';
        }

        if (empty($data['content'])){
            $error['content'] = 'Bạn chưa nhập nội dung';
        }
    }
?>
<form method="post" action="">
    <table cellspacing="0" cellpadding="5">
        <tr>
            <td>Tên của bạn</td>
            <td>
                <input type="text" name="fullname" id="fullname" value="<?php echo isset($data['fullname']) ? $data['fullname'] : ''; //lưu giá trị của các input text sau khi submit form ?>"/>
                <?php echo isset($error['fullname']) ? $error['fullname'] : '';  //hiển thị error ở đây ?>
            </td>
        </tr>
        <tr>
            <td>Email của bạn</td>
            <td>
                <input type="text" name="email" id="email" value="<?php echo isset($data['email']) ? $data['email'] : ''; //lưu giá trị của các input text sau khi submit form ?>"/>
                <?php echo isset($error['email']) ? $error['email'] : '';  //hiển thị error ở đây  ?>
            </td>
        </tr>
        <tr>
            <td>Nội dung liên hệ</td>
            <td>
                <textarea id="content" name="content"><?php echo isset($data['content']) ? $data['content'] : ''; //lưu giá trị của các input text sau khi submit form ?></textarea>
                <?php echo isset($error['content']) ? $error['content'] : '';  //hiển thị error ở đây  ?>
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="btn_submit" value="Gửi liên hệ"/></td>
        </tr>
    </table>
</form>
<?php
    // Lưu dữ liệu
    if(!isset($_POST['btn_submit'])) {
        //do nothing
    } else if (count($error) == 0){
        echo "<div style='color: blue'>Dữ liệu có thể lưu trữ</div>";
        $_REQUEST['fullname'] = $data['fullname'];
        $_REQUEST['email'] = $data['email'];
        $_REQUEST['content'] = $data['content'];
        
        header("Location: validate_using_php_result.php");
        // var_dump($_REQUEST);
    } else{
        echo "<div style='color: red'>Dữ liệu bị lỗi, không thể lưu trữ</div>";
    }
?>