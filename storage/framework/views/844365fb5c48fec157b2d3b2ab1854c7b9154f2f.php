<!DOCTYPE html>
<html>
<head>
	<title>Login page</title>
	
</head>
<body>

<fieldset>
	<legend>Login</legend>
	<form method="post" >
		<!-- <?php echo csrf_field(); ?> -->
		<!-- <?php echo e(csrf_field()); ?> -->
		<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
	<table>
		<tr>
			<td>Username:</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>Password:</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Submit"></td>
			<td></td>
		</tr>
	</table>
	</form>
</fieldset>

<div>
	<?php echo e(session('msg')); ?>

</div>
</body>
</html><?php /**PATH F:\ATP\lab\resources\views/login/index.blade.php ENDPATH**/ ?>