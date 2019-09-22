<link rel="stylesheet" type="text/css" href="w3.css">
    <!--Putting Jquery-->
<script type="text/javascript" src="jquery.js" ></script>
<!--Putting Javascript script-->
<script type="text/javascript" src="script.js" ></script>
<form method="post" >
   
<div class="container"  >
    <!--First row-->
     <div class="w3-container w3-border w3-blue w3-padding w3-margin" >
        <h2>Registration Form</h2>
    </div>
    <div class="w3-row-padding" >
        <div class="w3-third w3-padding" >
            <label>Title *</label>
            <input type="text" class="w3-input" name="">
        </div>
         <div class="w3-third w3-padding" >
            <label>First name *</label>
            <input type="text" class="w3-input" name="">
        </div>
         <div class="w3-third w3-padding" >
            <label>Middle name * </label>
            <input type="text" class="w3-input" name="">
        </div>
    <!--End of first row -->
    <!--First row-->
    <div class="w3-row-padding" >
        <div class="w3-third w3-padding" >
            <label>Last name *</label>
            <input type="text" class="w3-input" name="">
        </div>
         <div class="w3-third w3-padding" >
            <label>Gender *</label>
            <input type="text" class="w3-input" name="">
        </div>
         <div class="w3-third w3-padding" >
            <label>Marital status</label>
            <input type="text" class="w3-input" name="">
        </div>
    <!--End of first row -->
    <!--First row-->
    <div class="w3-row-padding" >
        <div class="w3-third w3-padding" >
            <label>Date of birth</label>
            <input type="text" class="w3-input" name="">
        </div>
         <div class="w3-third w3-padding" >
            <label>Identity</label>
            <input type="text" class="w3-input" name="">
        </div>
         <div class="w3-third w3-padding" >
            <label>Select identity!</label>
            <input type="text" class="w3-input" name="">
        </div>
    <!--End of first row -->
    <!--First row-->
    <div class="w3-row-padding" >
        <div class="w3-third w3-padding" >
            <label>Region</label>
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
                <select name="city" id="city" class="w3-input"  >
                 <option value disabled selected>Select Region</option>

                <?php
                while($row = mysqli_fetch_assoc($result)) {
                   ?>
                            <option value="<?php echo $row['id']; ?>"><?php echo $row["name"]; ?></option>
                   <?php
                }
            } else {
                echo "0 results";
            }    mysqli_close($db);
        ?>
        </select>
        </div>
         <div class="w3-third w3-padding" >
            <label>District *</label>
            <select name="wilaya" id="wilaya" class="w3-input">
                <option value disabled selected id="" >Select Wilaya</option>
            </select>
            
        </div>
         <div class="w3-third w3-padding"  >
            <label>Residence *</label>
            <input type="text" class="w3-input" name="">
        </div>
    <!--End of first row -->
    <!--First row-->
    <div class="w3-row-padding" >
        <div class="w3-third w3-padding" >
            <label>Email</label>
            <input type="text" class="w3-input" name="">
        </div>
         <div class="w3-third w3-padding" >
            <label>Mobile number one *</label>
            <input type="text" class="w3-input" name="">
        </div>
         <div class="w3-third w3-padding" >
            <label>Mobile number two *</label>
            <input type="text" class="w3-input" name="">
        </div>
    <!--End of first row -->
    
    </div>
    <div class="w3-container w3-blue w3-padding " >
        <button class="w3-btn w3-right w3-border w3-white" >Save and Continue</button>
    </div>
</div>


<br>
<br>

