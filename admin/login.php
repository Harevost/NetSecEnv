<?php
include_once('../sys/config.php');
include_once('../header.php');

if(isset($_SESSION['error_info']) && $_SESSION['error_info'] != '') {
	echo $_SESSION['error_info'];
	$_SESSION['error_info'] = '';
}
?>
<form class="bs-example form-horizontal" action="logCheck.php" method="post" name="log">
	<legend>Admin Sign In</legend>
    <div class="form-group">
        <label for="inputEmail" class="col-lg-2 control-label">Administrator</label>
        <div class="col-lg-3">
            <input type="text" name="user" class="form-control" id="inputEmail">
        </div>
	</div>
	<div class="form-group">
		<label for="inputEmail" class="col-lg-2 control-label">Password</label>
        <div class="col-lg-3">
			<input type="password" name="pass" class="form-control" id="inputEmail" onblur="check()">
        </div>
		<div><input type="submit" name="submit" class="btn btn-primary" value="Login"/></div>
    </div>				  
</form>
<?php
require_once('../footer.php');
?>