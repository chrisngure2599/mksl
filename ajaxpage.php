<?php
$db = mysqli_connect('localhost', 'root', 'sziff124', 'mksl');
if (isset($_POST["value"])) {
$cityid=mysqli_real_escape_string($db,$_POST['value']);#escaping just incase
$query=("SELECT * FROM `wilaya` WHERE `city_id`='$cityid'");
$res=mysqli_query($db,$query);
while ($data=mysqli_fetch_assoc($res)) {
?>
<option class="added" ><?php echo $data['name']; ?></option>
<?php
}
}
?>