<form action="inc/auth.php" method="post">
<input type="hidden" name="x" value="register">
<input type="text" name="name" placeholder="adınız">
<input type="text" name="surname" placeholder="soyadınız">
<input type="email" name="mail" placeholder="e-posta">
<input type="tel" name="gsm" placeholder="telefon">
<input type="password" name="password" >
<button type="submit">kayıt ol</button>
</form>
<?php
require_once('functions.php');

$register= curlJson('showmarket-api.herokuapp.com/api/auth/register', [
    'name' => 'husow',
    'surname' => 'asd',
    'mail' => 'i@no13.web.tr',
    'gsm' => '905443955688',
    'password' => '123456123465',
]);
print_r($register);