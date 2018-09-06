<?php 
	session_start();
	$data = intval($_POST['data']);
	die(preg_match('/a-zA-Z/', $data));

	function checkString($data)
	{
		if(!is_string($data))
		{
			throw new Exception ('Value must be a string data type');
		}
		
		return true;
	}

	try 
	{
		checkString($data);
		$_SESSION['data'] = 'Nice, the data entered is a string';
	}
	catch(Exception $e)
	{
		$_SESSION['error'] = 'Message: ' . $e->getMessage();
	}
	
	header('Location: index.php');

 ?>