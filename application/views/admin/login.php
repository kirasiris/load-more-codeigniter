<!DOCTYPE html>
<html>
<head>
	<title>Login System</title>
</head>
<body>
      <?php
          echo form_open_multipart('admin/login/check')
      ?>
      <input type="text" name="username" placeholder="Masukkan Username">
      <input type="password" name="password" placeholder="Masukkan Password">   
      <button type="submit" value="submit" name="submit">Login</button>  
      <?php echo form_close(); ?>
</body>
</html>