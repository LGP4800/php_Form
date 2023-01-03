<?php require("procesare.php") ?>
<!DOCTYPE html> 
<html lang="en">
<head> 
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULAR</title>  
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css"> 
	<?php
	 	if($usererror != null){
	 		?> <style>.error{display:block}</style> <?php
	 	}
	 ?>

	<script> 

		function htmlData(val){ 
    	document.getElementById("html_value").value = val;
		} 
		function cssData(val){ 
    	document.getElementById("css_value").value = val;
		} 
		function phpData(val){ 
    	document.getElementById("php_value").value = val;
		} 
		function jsData(val){ 
    	document.getElementById("js_value").value = val;
		}

	</script> 


</head> 
<body>  
		<p class="error">
			<?php echo $usererror; ?>
		</p> 

<form role="form" action="procesare.php" method="post" enctype="multipart/form-data">
		 
		<p class="error">
			<?php echo $usererror; ?>
		</p> 


		<h3 class="title">Personal Details</h3> 

		<div class="form-group row">
    		<label for="name" class="col-sm-1 col-form-label col-form-label-lg">Name</label>
    		<div class="col-md-5">
      			<input type="text" class="form-control form-control-md" name="name" id="name" placeholder="Enter name" >
    		</div>
  		</div>  

		<div class="form-group row">
    		<label for="email" class="col-sm-1 col-form-label col-form-label-lg">Email </label>
    		<div class="col-md-5">
      			<input type="email" class="form-control form-control-md" name="email" id="email" placeholder="Enter email" >
    		</div>
  		</div> 
 
		<div class="form-group row">
    		<label for="picture" class="col-sm-1 col-form-label col-form-label-lg">Picture</label>
    		<div class="col-md-5">
      			<input type="file" class="form-control form-control-md" name="picture" id="picture"  >
    		</div>
  		</div>   
		
		<h3 class="title">Skills</h3>

		<div class="form-group row">
    		<label for="html_skill" class="col-sm-1 col-form-label col-form-label-lg">HTML</label>
    		<div class="col-md-5"> 
				<input type="text" name="html_value" id="html_value" value="" readonly>
      			<input type="range" class="form-range form-range-md" min="1" max="10" name="html_skill" id="customRange2 html_skill" onchange="htmlData(this.value);" >
    		</div>
  		</div> 

		<div class="form-group row">
    		<label for="css_skill" class="col-sm-1 col-form-label col-form-label-lg">CSS</label>
    		<div class="col-md-5"> 
				<input type="text" name="css_value" id="css_value" value="" readonly>
      			<input type="range" class="form-range form-range-md" min="1" max="10" name="css_skill" id="customRange2 css_skill" onchange="cssData(this.value);" >
    		</div>
  		</div> 

		<div class="form-group row">
    		<label for="php_skill" class="col-sm-1 col-form-label col-form-label-lg">PHP</label>
    		<div class="col-md-5"> 
				<input type="text" name="php_value" id="php_value" value="" readonly>
      			<input type="range" class="form-range form-range-md" min="1" max="10" name="php_skill" id="customRange2 php_skill" onchange="phpData(this.value);"  >
    		</div>
  		</div> 
		
		<div class="form-group row">
    		<label for="js_skill" class="col-sm-1 col-form-label col-form-label-lg">JS</label>
    		<div class="col-md-5"> 
				<input type="text" name="js_value" id="js_value" value="" readonly>
      			<input type="range" class="form-range form-range-md" min="1" max="10" name="js_skill" id="customRange2 js_skill" onchange="jsData(this.value);" >
    		</div>
  		</div> 

	<button type="submit" name="submit" class="btn btn-secondary">Submit</button> 

</form>

<script src="js/script.js"></script>
</body> 
</html>
