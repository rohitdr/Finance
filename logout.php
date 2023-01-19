<?php

session_start();
?>

<?php

session_unset();
session_destroy();
echo "<script>window.open('login.php')</script>";

?>