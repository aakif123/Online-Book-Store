
<?php
session_start();

// unset session variable
session_unset();

// destroy session
session_destroy();

echo "<script>alert('User logout of MyKart Successful!');</script>";
echo "<script>location.href ='login.php'</script>";
?>
