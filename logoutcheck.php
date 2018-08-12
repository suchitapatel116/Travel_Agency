<html>
<body>

<?php
setcookie("keep","");

session_start();
$_SESSION['keepses']="no";

header("location:index.php");
?>

</body>
</html>