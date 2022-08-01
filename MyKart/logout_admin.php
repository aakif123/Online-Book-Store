
<?php
session_start();

// unset session variable
session_unset();

// destroy session
session_destroy();

echo "<script>alert('Admin logout of MyKart Successful!');</script>";
echo "<script>location.href ='admin.php'</script>";
?>
