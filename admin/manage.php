<?php 
include_once('../sys/config.php');

if (isset($_SESSION['admin'])) {
include_once('../header.php');

?>
<table class="items table">
<thead>
<tr>
<th id="yw0_c0">Manage</th>
<th id="yw0_c1">Entry</th>
</thead>
<tbody>
	<tr class="odd">
		<td>Users</td>
		<td><a href="manageUser.php">Enter</a></td>
	</tr>
	<tr class="odd">
		<td>Messages</td>
		<td><a href="manageCom.php">Enter</a></td>
	</tr>
</tbody>
</table>
<?php
require_once('../footer.php');
}
else {
	not_find($_SERVER['PHP_SELF']);
}
?>
