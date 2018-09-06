
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Test</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<div class="container">
	<?php
		echo 'product name count = count(' . strlen('Jaronx Steering Wheel for Nintendo Switch,for Mario Kart Steering Wheel Style Handle With Gift Box Package Fit In Joy-con controllers (2 Pack)Black') . ')';
		echo '<br>';
		echo 'product id count = count(' . strlen('qwer qwer qwer qwer qwer qwer qwer qwer qwer qwer qwer qwer qwer') . ')';
		echo '<br>';
		session_start();
	?>
	<?php if (isset($_SESSION['data']) && !empty($_SESSION['data'])) echo $_SESSION['data'] ?>
	<?php if (isset($_SESSION['error']) && !empty($_SESSION['error'])) echo $_SESSION['error'] ?>

	<form action="form.php" method="POST">
		<input type="text" name="data">
		<button>Submit</button>
	</form>

	<?php echo "this is test \"data\""; ?>
	<?php unset($_SESSION['data'], $_SESSION['error']) ?>

		<div class="alert alert-warning alert-dismissible fade show" role="alert">
		  <strong>Holy guacamole!</strong> You should check in on some of those fields below.
		  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		  </button>
		</div>

	<h1>Hello</h1>

	
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</div>
</body>
</html>
