<?php
header("Content-Type:text/html;charset=utf-8");
// 清除session
session_start();
session_destroy();
echo "<script>alert('退出登录成功');location.href='../login.php'</script>"

?>