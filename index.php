    <!--Putting Jquery-->
<script type="text/javascript" src="jquery.js" ></script>
<!--Putting Javascript script-->
<script type="text/javascript" src="script.js" ></script>
<?php
$db = mysqli_connect('localhost', 'root', 'sziff124', 'mksl');
// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
//SElecting from DB
$sql = "SELECT * FROM city";
//Running the Query
$result = mysqli_query($db, $sql);
//Checking if there is any!
if (mysqli_num_rows($result) > 0) {
    // output in select
    ?>
    <select name="city" id="city"  >
     <option value disabled selected>Select Country</option>

    <?php
    while($row = mysqli_fetch_assoc($result)) {
       ?>
                <option value="<?php echo $row['id']; ?>"><?php echo $row["name"]; ?></option>
       <?php
    }
} else {
    echo "0 results";
}

mysqli_close($db);
?>
</select>
<br>
<br>
<select name="city" id="city" >
     <option value disabled selected>Select Wilaya</option>
</select>