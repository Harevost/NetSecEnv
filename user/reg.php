<?php
include_once('../sys/config.php');
require_once('../header.php');

if(isset($_SESSION['error_info']) && $_SESSION['error_info'] != '') {
	echo $_SESSION['error_info'];
	$_SESSION['error_info'] = '';
}
?>
<form class="bs-example form-horizontal" action="regCheck.php" method="post" name="reg">
	<legend>Sign Up</legend>
	<div class="form-group">
        <label for="inputEmail" class="col-lg-2 control-label">Username</label>
        <div class="col-lg-3">
            <input type="text" name="user" class="form-control" id="inputEmail">
        </div>
	</div>
    <div class="form-group">
        <label for="inputEmail" class="col-lg-2 control-label">Password</label>
        <div class="col-lg-3">
            <input type="password" name="passwd" class="form-control" id="inputEmail">
        </div>
	</div>
	<div class="form-group">
		<label for="inputEmail" class="col-lg-2 control-label">Confirm Password</label>
        <div class="col-lg-3">
			<input type="password" name="passwd2" class="form-control" id="inputEmail" onblur="check()">
        </div>
		<div><input type="submit" name="submit" class="btn btn-primary" value="Register"/></div>
    </div>				  
</form>
<script src="../js/check.js"></script>
<?php
require_once('../footer.php');
?>
