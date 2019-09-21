<?php
$db = mysqli('localhost', 'root', 'sziff124', 'mksl');
if (isset($_POST["value"])) {
$cityid=mysqli_real_escape_string($db,$POST['value']);#escaping just incase

}
?>