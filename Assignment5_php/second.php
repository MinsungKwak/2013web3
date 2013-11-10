<?php include "header.php" ?>

<div id="page2">

	<h1>Questionnaire</h1>
	<form name="second_question" method="get" action="result.php">
			2. How do you feel about php?
		<br/>
	<input type="radio" name="second"value="Too hard"> Too hard.
		<br/>
	<input type="radio" name="second"value="Tired"> Tired.
		<br/>
	<input type="radio" name="second"value="Fun"> Fun.
	<input type="hidden" name="first"value="<?=$_GET['first']?>">
		<br/>
	<input type="submit" name="submitt"value="Result">
	</form>

</div>
<?php include "footer.php" ?>