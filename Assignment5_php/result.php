<?php include "header.php" ?>
<div id="page3">

	<h1>Result</h1>

	<?php
	$a=$_GET['first'];
	$b=$_GET['second'];
	
	?>
	<br/><br/>
	<?php
	echo "<span class='text-margin'>1. Who am I? -</span>".$a;
	?>
	<br/>
	<?php
		echo "<span class='text-margin'>2. How do you feel about php? -</span>".$b;
	?>

	<br /><br />
	<td align="center" valign="middle"><a href="index.php">home</a></td>

</div>

<?php include "footer.php" ?>