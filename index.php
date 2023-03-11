<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Drop and Drag</title>
</head>
	<style>
		#droptarget{
			width: 200px;
			height: 100px;
			display: flex;
			align-items: center; justify-content: center;
			border: 2px dashed black;
			border-radius: 20px;
		}

		.changes{
			background: blue;
		}
	</style>
<body>

	<form action="data.php" method="POST" enctype="multipart/form-data">
		
		<input type="file" name="photo" id="file">
		<div id="droptarget">
		drop and drag file
		</div>
		<button type="submit">submit</button>
	</form>
	




	<script>
		const target = document.querySelector("#droptarget");
		const FileInput = document.querySelector("#file");


	["dragover","dragenter","drop","dragleave"].forEach(event =>{
		target.addEventListener(event,preventDefault,false);
	});
	
	
	["dragover","dragenter"].forEach(event =>{
		target.addEventListener(event,targetChange,false)
	});

	["drop","dragleave"].forEach(event =>{
		target.addEventListener(event,targetUnChange,false)
	});


	target.addEventListener("drop",fileHandling,false);

	function preventDefault(e){
		 e.preventDefault();
      	 e.stopPropagation();

      	 // console.log("hehe");
	}

	function targetChange(){
		target.classList.add("changes");
	}

	function targetUnChange(){
		target.classList.remove("changes");
	}

	function fileHandling(e){

		console.log(e.dataTransfer.files);
		FileInput.files = e.dataTransfer.files;
	}

	</script>	
</body>
</html>