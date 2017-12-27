<?php
require_once('sys/config.php');
require_once('header.php');

$query = "SELECT * FROM comment ORDER BY comment_id";
$data = mysqli_query($dbc,$query) or die('Error!!');
mysqli_close($dbc);
?>
<div class="bs-example table-responsive">
	<table class="table table-striped table-hover ">
	<tr>
		<th>#</th>
		<th>Column heading</th>
	</tr>
<?php
while($com = mysqli_fetch_array($data)) {
	//净化输出变量
	$html['username'] = $com['user_name'];
	$html['comment_text'] = $com['comment_text'];
	
	echo '<tr>';
	echo '<td>'.$html['username'].'</td>';
	echo '<td>'.$html['comment_text'].'</td>';
	echo '</tr>';
}
?>
</table>
</div>
<?php 
if (isset($_SESSION['username']))
{?>
<form action="messageSub.php" method="post" name="message">
	<div class="col-lg-10">
        <textarea class="form-control" rows="3" id="textArea" name="message"></textarea>
    </div>
    <input type="submit" name="submit" value="Send Message"/>
	<a href="user/user.php">Back</a><br /><br /><br /><br /><br />
</form>

<?php 
}

require_once('footer.php');
?>