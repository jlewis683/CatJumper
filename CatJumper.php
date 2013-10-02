<html>
	<head>
		<title>Cat Jumper</title>
	</head>
	<body>
		<?php
			$TextFile = file_get_contents("CatsAndDogs.txt");
			$dog = substr_count($TextFile, "dog") + substr_count($TextFile, "Dog");
			$cat = substr_count($TextFile, "cat") + substr_count($TextFile, "Cat");
			$jump = substr_count($TextFile, "jump") + substr_count($TextFile, "Jump");
			echo "Dog " . $dog . "<br>";
			echo "Cat " . $cat . "<br>";
			echo "Jump " . $jump . "<br>";
		?>
	</body>
</html>