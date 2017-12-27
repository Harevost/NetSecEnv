<?php 
include_once('../sys/config.php');

if (isset($_SESSION['admin'])) {
	include_once('../header.php');
	$query = "SELECT * FROM comment ORDER BY comment_id";
	$data = mysqli_query($dbc,$query) or die('Error');
	mysqli_close($dbc);
?>
<table class="items table">
<thead>
<tr>
<th id="yw0_c0">Messages</th>
<th id="yw0_c0">Users</th>
<th id="yw0_c4">Manage</th>
</thead>
<tbody>
<?php 
	//打印数据
	while ($com = mysqli_fetch_array($data)) {
		$html_comment_text = htmlspecialchars($com['comment_text']);
		$html_user_name = htmlspecialchars($com['user_name']);
?>
	<tr class="odd">
		<td><?php echo $html_comment_text;?></td>
		<td><?php echo $html_user_name;?></td>
		<td><a href="delCom.php?id=<?php echo $com['comment_id'];?>">Delete</a></td>
	</tr>
<?php } 
?>
</tbody>
</table>
<a href="manage.php">Back</a>
<?php 
require_once('../footer.php');
}
else {
	not_find($_SERVER['PHP_SELF']);
}
 ?>