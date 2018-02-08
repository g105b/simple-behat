<?php
$name = $_GET["your-name"] ?? "you";
?>
<!doctype html>
<meta charset="utf-8" />
<title>Hello, you!</title>

<h1>Hello, <?php echo $name?>!</h1>

<form>
	<input name="your-name" placeholder="Your name" />
	<button>Submit</button>
</form>