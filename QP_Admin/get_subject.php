<?php
require_once("controllers/connection.php");
if(!empty($_POST["dept_id"]))
{
	$query =mysqli_query("SELECT * FROM subject WHERE dept_id = '" . $_POST["dept_id"] . "'");
?>
<option value="">Select District</option>
<?php
while($row=mysqli_fetch_array($query))
{
?>
<option value="<?php echo $row["subject"]; ?>"><?php echo $row["subject"]; ?></option>
<?php
}
}
?>