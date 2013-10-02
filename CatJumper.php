<html>
	<head>
		<title>Cat Jumper</title>
	</head>
	<body>
		<?php
			//This section of code counts the occurrence of each word in CatsAndDogs.txt and outputs a list of the number of times each word appears in the file
			$TextFile = file_get_contents("CatsAndDogs.txt");
			$TextFile = strtolower($TextFile); //Convert the string to lower case to simplify accounting for words containing capital letters
			$TextFile = preg_replace("/[^a-z]/", " ",$TextFile);//replace everything other than letters with spaces
			$WordArray = explode(" ", $TextFile);
			//Strip out empty entries caused by multiple spaces in a row
			foreach($WordArray as $key => $word)
			{
				if($word == "")
					unset($WordArray[$key]);
			}
			//Store the words and numbers of times they show up in an array in the format $StoredWords[(a word in the file)] == (number of times the word shows up)
			foreach($WordArray as $WordArrayKey => $WordArrayEntry)
			{
				$incremented = 0;
				foreach($StoredWords as $StoredWordsWord => $WordCount)//For each entry in $WordArray, look through $StoredWords to see if it has already been encountered.
				{
					if($WordArrayEntry == $StoredWordsWord)//If the word from $WordArray is already in $StoredWords, increment its count.
					{
						$StoredWords[$StoredWordsWord] ++;
						$incremented = 1;
						break;
					}
				}
				if($incremented == 0)//if the word was not already stored in $StoredWords, make a new entry
				{
					$StoredWords[$WordArrayEntry] = 1;
				}
			}
			foreach($StoredWords as $word => $count)
			{
				echo $word . " " . $count . "<br>\n";
			}
		?>
	</body>
</html>