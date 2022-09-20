<?php 

	//session_start();

	$quote1 = "“Learn as if you will live forever, live like you will die tomorrow.”";
	$author1 = "Mahatma Gandhi";

	$quote2 = "“When you give joy to other people, you get more joy in return. You should give a good thought to happiness that you can give out.”";
	$author2 = "Eleanor Roosevelt";

	$quote3 = "“Success is not final; failure is not fatal: It is the courage to continue that counts.”";
	$author3 = "Winston S. Churchill";

	$quote4 = "“If you are working on something that you really care about, you don’t have to be pushed. The vision pulls you.”";
	$author4 = "Steve Jobs";

	$quote5 = "“To know how much there is to know is the beginning of learning to live.”";
	$author5 = "Dorothy West";
	
	$value = rand(1,5);

	if ($value == 1) {
		$_SESSION['quote'] = $quote1;
		$_SESSION['author'] = $author1;
	} 
	else if ($value == 2) {
		$_SESSION['quote'] = $quote2;
		$_SESSION['author'] = $author2;
	}
	else if ($value == 3) {
		$_SESSION['quote'] = $quote3;
		$_SESSION['author'] = $author3;
	}
	else if ($value == 4) {
		$_SESSION['quote'] = $quote4;
		$_SESSION['author'] = $author4;
	}
	else if ($value == 5) {
		$_SESSION['quote'] = $quote5;
		$_SESSION['author'] = $author5;
	}

 ?>