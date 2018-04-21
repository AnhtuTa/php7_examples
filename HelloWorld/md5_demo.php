<?php
	if(isset($_POST['btn_submit'])) {
		$result_md5 = md5($_POST['txtInput']);
		$result_sha = sha1($_POST['txtInput']);
	}
?>
<form method="post" action="">
    <table cellspacing="0" cellpadding="5">
        <tr>
            <td>Enter something</td>
            <td>
                <input type="text" name="txtInput" value="<?php echo isset($_POST['txtInput']) ? $_POST['txtInput'] : ''; //lưu giá trị của các input text sau khi submit form ?>"/>
            </td>
        </tr>            
    </table>
    <input type="submit" name="btn_submit" value="Encode"/>
</form>
<div style='color: blue'><?php echo isset($result_md5) ? "MD5: $result_md5" : ''; ?></div>
<div style='color: blue'><?php echo isset($result_sha) ? "SHA1: $result_sha" : ''; ?></div>
