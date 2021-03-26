<?php
    session_start();
    session_unset();
    session_destroy();

    echo '<script>alert("You have been logged out.)</script>';
?>
<meta http-equiv="refresh" content="0.1;url=index.php" />
