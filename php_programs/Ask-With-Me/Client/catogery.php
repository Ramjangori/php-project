
<?php
include("./Common/db.php");
$select = "SELECT * FROM cat";
$runQuery = $conn->query($select);
?>
<select class="form-select" name="cat" aria-label="Default select example">
  <option selected>Choose Category</option>
  <?php 
  foreach( $runQuery  as $row ){
    $ID =  $row['ID'];
     $cat = ucfirst($row['CATEGORY']);

    echo "<option value=$ID >$cat</option>";
}
  ?>
</select>




