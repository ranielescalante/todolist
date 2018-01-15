<?php

$todos = file_get_contents('assets/todos.json');
$todos = json_decode($todos, true);

// var_dump($todos);

?>

<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<title>PHP To-Do List</title>

	<script src="https://use.fontawesome.com/39f1e70699.js"></script>

	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	
	

</head>
<body>

	<div id="container">
		
		<h1>To-Do List</h1>

		<input id="newTask" type="text" placeholder="Add New Task">

		<ul>
			<?php

			foreach ($todos as $key => $todo) {
				
				if($todo['done'] === false)
					echo '<li id="' .$key. '"><span><i class="fa fa-trash"></i></span>'.$todo['task'].'</li>';
				else
					echo '<li id="' .$key. '" class="completed"><span> <i class="fa fa-trash"></i></span>'.$todo['task'].'</li>';
			}

			?>

		</ul>

	</div>

<script type="text/javascript" src="assets/lib/jquery-3.2.1.min.js"></script>

<script type="text/javascript" src="assets/js/todos.js"></script>

</body>
</html>