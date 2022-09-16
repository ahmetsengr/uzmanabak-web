<?php 
include 'functions.php';
echo $_SESSION['name'];

?>
<form action="inc/auth.php" method="post">
<input type="hidden" name="x" value="login">
<input type="email" name="mail" placeholder="e-posta">
<input type="password" name="password" >
<button type="submit">kayıt ol</button>
</form>
