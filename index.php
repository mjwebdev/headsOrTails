<html>
<head>
	<title>Heads or tails?</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<!-- Latest compiled and minified JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<!-- Custom CSS -->
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<header>
			<h1>heads or tails? ... Reload the page.</h1><hr />
			<p>
				<?php
					$attempts = 0;

					for ($i=0; $i < 100; $i++) {

						$toss = rand(0, 1);
						$heads = 0;
						$tails = 0;
					 	
					 	if ($toss % 2 == 0) {
					 		$attempts = $attempts + 1;
					 		$heads = $heads + 1;
					 		echo "Attempt number: " . $attempts . ": Throwing a coin... It's heads!.. Hit heads " . $heads . " time(s) and tails " . $tails . " time(s). <br /><br />";
					 	}
					 	else
					 	{
					 		$attempts = $attempts + 1;
					 		$tails = $tails + 1;
					 		echo "Attempt number: " . $attempts . ": Throwing a coin... It's tails!.. Hit tails " . $tails . " time(s) and heads " . $heads . " time(s). <br /><br />";
					 	}
					}

				?>
			</p>
		</header>
	</div>
</body>
</html>