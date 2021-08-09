<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		  content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Game</title>
</head>
<body>
	<form action="" method="post">
		<label for="word">Word</label>
		<input type="text" name="word" id="word" readonly>
		<label for="guess">Guess</label>
		<input type="text" name="guess" id="guess">
		<input type="submit" name="answer" id="answer" value="Answer">
		<input type="submit" name="resetScore" id="resetScore" value="Reset">
	</form>
	<p id="score"></p>
</body>
</html>