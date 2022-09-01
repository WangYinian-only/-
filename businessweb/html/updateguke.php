<?php
session_start();
if (isset($_SESSION['key'])) {
    $key = $_SESSION['key'];
    if($key==1)
    {
        echo "<script>alert('信息修改成功！')</script>";
        unset($_SESSION['key']);
    }
    if ($key==0)
    {
        echo "<script>alert('信息修改成功！')</script>";
        unset($_SESSION['key']);
    }
}
else {

}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>修改个人信息</title>
</head>
<body>
<form action="../control/updateinformation.php" method="post" onsubmit="return checkPhone()">
    <div align="center">
        <h1 style="color: black;">&nbsp&nbsp&nbsp欢迎进行个人信息更改！</h1>
        <a href="menu1.php"><div style="color: black;">返回主页</div></a>
        <br>
        <table border="6px">
            <tr>
                <td><h4><div style="color: black;">手机号：</div></h4></td>
                <td><input type="text" id="phone" name="phone" required maxlength="40" placeholder="请输入手机号"></td>
            </tr>
            <tr>
                <td><h4><div style="color: black;">邮箱：</div></h4></td>
                <td><input type="email" id="email" name="email"  required placeholder="请输入邮箱"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit">提&nbsp&nbsp&nbsp交</button>
                    &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                    <button type="reset">清&nbsp&nbsp&nbsp空</button>
                </td>
            </tr>
        </table>
    </div>
</form>
</body>
<script type="text/javascript">
    function checkPhone(){
        var phone = document.getElementById('phone').value;
        if(!(/^1[34578]\d{9}$/.test(phone))){
            alert("手机号码有误，请重填");
            return false;
        }
    }
</script>
</html>