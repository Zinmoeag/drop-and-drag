<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php 

		$file = $_FILES['photo'];
		echo "<pre>";
		var_dump($file);

		$name = basename($file['name']);

		$tmpName = $file['tmp_name'];
		$destination = 'storage/'.$name;

		if(move_uploaded_file($tmpName,$destination)){
			echo "file uploade";
		}else{
			echo "error";
		};

	 ?>

</body>
</html>