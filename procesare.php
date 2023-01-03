<?php  

	$username = null;		
	$useremail = null; 
	$userpicture = null; 	
	$userhtml = null;  
	$usercss = null;  
	$userphp = null;  
	$userjs = null; 
	$usererror = null;
	$usersuccess = null; 

	
	if(isset($_POST['submit'])){
		$username = $_POST["name"]; 	
		$useremail = $_POST["email"]; 
		$userpicture = $_FILES["name"];
		$userhtml =  $_POST["html_value"];
		$usercss = $_POST["css_value"]; 
		$userphp = $_POST["php_value"]; 
		$userjs = $_POST["js_value"]; 
		$extension = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);

		// if(!$extension=='.jpeg' || !$extension=='.png' || !$extension=='.gif'){
		// 	echo "Please upload a valid img : .gif, .jpeg, .png ";
		// }else
		if(empty(trim($username))){
			// $usererror = "Completati corect toate campurile formularului.";  
			// header('Location: ' . $_SERVER['HTTP_REFERER']); 
			echo "Completati corect toate campurile formularului.";
		}elseif(empty(trim($useremail))){
			// $usererror = "Completati corect toate campurile formularului."; 
			// header('Location: ' . $_SERVER['HTTP_REFERER']); 
			echo "Completati corect toate campurile formularului.";
		}elseif(empty(trim($userhtml))){ 
			// $usererror = "Completati corect toate campurile formularului."; 
			// header('Location: ' . $_SERVER['HTTP_REFERER']); 
			echo "Completati corect toate campurile formularului.";
		}elseif(empty(trim($usercss))){ 
			// $usererror = "Completati corect toate campurile formularului."; 
			// header('Location: ' . $_SERVER['HTTP_REFERER']); 
			echo "Completati corect toate campurile formularului.";
		}elseif(empty(trim($userphp))){ 
			// $usererror = "Completati corect toate campurile formularului."; 
			// header('Location: ' . $_SERVER['HTTP_REFERER']); 
			echo "Completati corect toate campurile formularului.";
		}elseif(empty(trim($userjs))){ 
			// $usererror = "Completati corect toate campurile formularului."; 
			// header('Location: ' . $_SERVER['HTTP_REFERER']); 
			echo "Completati corect toate campurile formularului.";
		}else{
				
				$nume = $_POST["name"]; 	
				$email = $_POST["email"];
				$picture = $_FILES["file"]["name"];;
				$html = filter_input(INPUT_POST, "html_value", FILTER_VALIDATE_INT);
				$css = filter_input(INPUT_POST, "css_value", FILTER_VALIDATE_INT); 
				$php = filter_input(INPUT_POST, "php_value", FILTER_VALIDATE_INT); 
				$js = filter_input(INPUT_POST, "js_value", FILTER_VALIDATE_INT);
				
				$host = "localhost"; 
				$user = "root"; 
				$password = "root"; 
				$dbname = "formular"; 

				$conn = mysqli_connect($host, $user, $password, $dbname); 

				if(mysqli_connect_errno()){ 
					die("Connection error: " . mysqli_connect_error());
				}
				$sql = "INSERT INTO user (nume,email,html,css,php,js,poza)
						VALUES ('$nume', '$email', '$html', '$css', '$php', '$js', '$picture')"; 
				if ($conn->query($sql) === TRUE) {
					echo "Formularul a fost trimis cu succes."; 
				} else {
					echo "Error: " . $sql . "<br>" . $conn->error;
				}
				
				$conn->close();
			}
	}


	
	
	

?>